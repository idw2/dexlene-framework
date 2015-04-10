<?php

Class AppController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->layout = "Startbootstrap-sb-admin-1.0.2";
        $this->redirec("app/welcome");
    }

    public function database_config() {
        $this->layout = "Config";
    }

    public function username_config() {
        $this->layout = "Config";
    }

    public function termo_uso() {
        $this->layout = "Config";
    }

    public function sucess_config() {
        $this->layout = "Config";
    }

    public function sem_conexao() {
        $this->layout = "Config";
    }

    public function welcome() {
        $this->layout = "Startbootstrap-sb-admin-1.0.2";
    }

    public function users() {
        $this->layout = "Startbootstrap-sb-admin-1.0.2";
        $this->factory->_tabela = $this->page;
        $this->assign("th", $this->factory->renderTh(
                        array("heads" =>
                            array("owner" => "Criado por",
                                "id" => NULL,
                                'password' => NULL,
                                'trash' => NULL,
                                'email' => "E-mail",
                                'ordem' => "Posição",
                                'username' => 'Login',
                                'created' => 'Criado em',
                                'modified' => 'Modificado em',
                                'name' => 'Nome'
                            ),
                            "positions" =>
                            array("owner" => 7,
                                "id" => NULL,
                                'password' => NULL,
                                'trash' => NULL,
                                'email' => 5,
                                'ordem' => 6,
                                'username' => 4,
                                'created' => 1,
                                'modified' => 2,
                                'name' => 3
                            )
                        )
                )
        );

        $this->assign("rows", $this->factory->renderList(array(
            'table' => 'users',
            'alias' => 'User',
            'fields' => "*",
            'limit' => array(0, 100),
            'where' => NULL,
            'joins' => array(array(
                    'join' => 'INNER',
                    'alias' => 'Grp',
                    'table' => 'groups',
                    'conditions' => '`Grp`.user_id = `User`.id'),
                array(
                    'join' => 'INNER',
                    'alias' => 'Permission',
                    'table' => 'permissions',
                    'conditions' => '`Permission`.group_id = `Grp`.id'),
            ),
            'order_by' => array('order' => 'desc',
                'fields' => array('created')),
            'group_by' => 'id'
        )));
        

    }

}
