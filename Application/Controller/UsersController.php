<?php

Class UsersController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->layout = "Startbootstrap-sb-admin-1.0.2";
        $limit = $this->factory->getLimitPaginator(30);
        $this->factory->_tabela = "users";
        $this->assign("th", $this->factory->renderTh(
                        array("heads" =>
                            array("owner" => "Criado por",
                                "id" => NULL,
                                'password' => NULL,
                                'trash' => NULL,
                                'email' => "E-mail",
                                'ordem' => "Posição",
                                'status' => "Situação",
                                'username' => 'Login',
                                'created' => 'Criado em',
                                'modified' => 'Modificado em',
                                'name' => 'Nome'
                            ),
                            "positions" =>
                            array("owner" => 8,
                                "id" => NULL,
                                'password' => NULL,
                                'trash' => NULL,
                                'email' => 5,
                                'ordem' => 6,
                                'status' => 7,
                                'username' => 4,
                                'created' => 1,
                                'modified' => 2,
                                'name' => 3
                            )
                        )
                )
        );

        $users = array(
            'get' => 'rows',
            'table' => 'users',
            'alias' => 'User',
            'fields' => "*",
            'limit' => $limit,
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
        );

        $this->assign("rows", $this->factory->renderList($users));
        $this->assign("paginator", $this->factory->Paginator($users));
    }
    
    public function add(){
        $this->layout = "Startbootstrap-sb-admin-1.0.2";
    }

}
