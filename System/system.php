<?phpclass System {    private $controller;    private $method;    private $model;    private $view;    private $view_folder;    private $application;    private $args;    static $factory;    public function __construct() {        $this->structure();        $this->exists();    }    public function __destruct() {        $layout = $this->loadLayout();        if (file_exists(VIEW_DIR . $this->view . ".tpl")) {            if (file_exists($layout)) {                $this->loadVarTpl();                                $this->application->assign("content", $this->loadContentTpl());                $this->application->setTemplateDir(LAYOUT_DIR . $this->application->layout);                $this->application->view_tpl($layout);            } else {                $this->application->view_tpl($this->view);            }        } else if (substr_count($_GET["url"], "ajax") === 1) {            die();        } else {            $error = "Erro: Not found file {$this->method}.tpl in class {$this->controller} and folder View" . DS . "{$this->view_folder} ";            $this->error_404($error);            $layout = $this->loadLayout();            $this->loadVarTpl();            $this->application->assign("content", $this->loadContentTpl());            $this->application->setTemplateDir(LAYOUT_DIR . $this->application->layout);            $this->application->view_tpl($layout);        }    }    private function loadVarTpl() {        $this->application->assign("webfiles", WWW_ROOT);        $this->application->assign("ds", DS);        $this->application->assign("request_uri", REQUEST_URI);        $this->application->assign("page", $this->application->page);    }    private function loadContent($url) {        ob_start();        require_once($url);        $content = ob_get_clean();        return $content;    }    private function loadLayout() {        $layout = LAYOUT_DIR . $this->application->layout . DS . "index.tpl";        return $layout;    }    private function loadContentTpl() {        ob_start();        $this->application->view_tpl($this->view);        $content = ob_get_clean();        return $content;    }    private function structure() {        $prms = (empty($_GET)) ? (class_exists('Database')) ? $_GET["url"] = "home/index" : $_GET["url"] = "app/termo-uso" : $_GET["url"];        $params = array_filter(explode("/", $prms));        if (sizeof($params) > 2) {            $args = $params;            unset($args[0]);            unset($args[1]);            $this->args = $args;        }                $controller = (isset($params[0])) ? $params[0] . "Controller" : "App" . "Controller";        $model = (isset($params[0])) ? $params[0] . "Model" : "App" . "Model";        $params[1] = str_replace("-", "_", (isset($params[1]) ? $params[1] : "index"));        $method = (isset($params[1])) ? $params[1] : "";        $view = (isset($params[1])) ? $params[0] . DS . $params[1] : "App" . DS . "index";        $this->controller = ucfirst($controller);        $this->model = ucfirst($model);        $this->method = $method;        $this->view_folder = ucfirst($params[0]);        $this->view = ucfirst($view);        return false;    }    private function exists() {        $controller = $this->controller;        $model = $this->model;        $method = $this->method;        $view = $this->view;        if (class_exists($controller)) {            (object) $this->application = new $controller();            $this->application->page = $method;               if (method_exists($controller, $method)) {                if (class_exists('Database')) {                    if (class_exists($model)) {                        if (class_exists('Database') && ($method != "sem_conexao" && $controller != "AppController")) {                            self::$factory = new $model();                        }                    } else {                        $error = "Erro: Not found class {$model}();";                        $this->error_404($error);                    }                }                $this->application->get_smarty();                $r = new ReflectionMethod($controller, $method);                $total_args = (int) $r->getNumberOfRequiredParameters();                if (is_array($this->args)) {                    if (sizeof($this->args) <= $total_args) {                        #var_dump(implode(",", array_values($this->args));                        //$this->application->{$method}(implode(",", array_values($this->args)));                        //$this->application->{$method}(extract($this->args));                        //$this->application->{$method}(array_merge($this->args, $args));                        //$this->application->{$method}(extract($this->args, EXTR_IF_EXISTS));//                        $this->application->{$method}(//                            foreach($this->args as $name => $value){//                                $arg ,//                            }//                        );                                        } else {                        $error = "Invalid number of arguments in method: {$method}(){} and class {$controller}. Arguments total in method = {$total_args}";                        $this->error_404($error);                    }                } else {                    $this->application->{$method}();                }            } else {                $error = "Erro: Not found function {$method}(){} in class {$controller}";                $this->error_404($error);            }        } else {            $error = "Erro: Not found class {$controller}();";            $this->error_404($error);        }    }    private function error_404($error) {        unset($this->application);        $controller = $this->controller = "ErrorController";        $method = $this->method = "error_404";        $view = $this->view = "Error" . DS . "error_404";        (object) $this->application = new $controller();        $this->application->get_smarty();        $this->application->$method();        $this->application->assign("error", $error);    }}