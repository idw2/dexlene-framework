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
    }

}
