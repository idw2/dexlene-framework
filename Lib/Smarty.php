<?php

class My_smarty extends SmartyBC {

//    public $default_template_dir    =  'templates';
    
    public function __construct() {
        parent::__construct();
    }
    
    function get_smarty() {
        
        
        $this->setCacheDir(ROOT_LIB . "cache");
        $this->setConfigDir(ROOT_LIB . "config");
        $this->setTemplateDir(VIEW_DIR);
        $this->setCompileDir(ROOT_LIB . "compiled");

        $this->force_compile = 1;
        $this->caching = true;
        $this->cache_lifetime = 3600;
        
    }

    function view_tpl($template_name) {
        
        if (strpos($template_name, '.') === FALSE && strpos($template_name, ':') === FALSE) {
            $template_name .= '.tpl';
            $this->display($template_name);
        } else {
            $this->display($template_name);
        }
    }

}
