<?php

/*
 * DEFININDO O SEPARADOR DOS DIRETORIOS 
 */
if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}

/*
 * DEFININDO O DIRETORIO RAIZ DO PROJETO, CAMINHO FISICO
 */
if (!defined('ROOT')) {
    define('ROOT', dirname(dirname(dirname(__FILE__))));
}

/*
 * DEFININDO DOS DEMAIS DIRETORIOS
 */
if (!defined('ROOT_LIB')) {
    define('ROOT_LIB', ROOT . DS . 'Lib' . DS);
}

if (!defined('ROOT_SYSTEM')) {
    define('ROOT_SYSTEM', ROOT . DS . 'System' . DS);
}

if (!defined('WEBFILES_DIR')) {
    define('WEBFILES_DIR', basename(dirname(__FILE__)));
}

if (!defined('WWW_ROOT')) {
    define('WWW_ROOT', dirname(__FILE__) . DS);
}

if (!defined('APPLICATION_DIR')) {
    define('APPLICATION_DIR', ROOT . DS . basename(dirname(dirname(__FILE__))) . DS);
}

if (!defined('APPLICATION_DIR')) {
    define('APPLICATION_DIR', ROOT . DS . basename(dirname(dirname(__FILE__))) . DS);
}

if (!defined('CONTROLLER_DIR')) {
    define('CONTROLLER_DIR', APPLICATION_DIR . 'Controller' . DS);
}

if (!defined('MODEL_DIR')) {
    define('MODEL_DIR', APPLICATION_DIR . 'Model' . DS);
}

if (!defined('VIEW_DIR')) {
    define('VIEW_DIR', APPLICATION_DIR . 'View' . DS);
}

if (!defined('CONFIG_DIR')) {
    define('CONFIG_DIR', APPLICATION_DIR . 'Config' . DS);
}

if (!defined('LAYOUT_DIR')) {
    define('LAYOUT_DIR', APPLICATION_DIR . 'Layout' . DS);
}

if (!defined('REQUEST_URI')) {
    define('REQUEST_URI', str_replace((isset($_REQUEST["url"])) ? $_REQUEST["url"] : "", "", $_SERVER["REQUEST_URI"]));
}

/*
 * CARREGANDO MODELO TPL SMARTY
 */
require_once ROOT_LIB . "Smarty.class.php";
require_once ROOT_LIB . "Smarty.php";

/*
 * CARREGANDO O CONFIGURACOES
 */
if (CONFIG_DIR != "") {
    $path = CONFIG_DIR;
    $diretorio = dir($path);

    while ($arquivo = $diretorio->read()) {
        if ($arquivo != ".." && $arquivo != ".") {
            require_once "{$path}{$arquivo}";
        }
    }
    $diretorio->close();
}

/*
 * CARREGANDO O SISTEMA
 */
if (ROOT_SYSTEM != "") {
    $path = ROOT_SYSTEM;
    $diretorio = dir($path);

    while ($arquivo = $diretorio->read()) {
        if ($arquivo != ".." && $arquivo != ".") {
            if ($arquivo == "model.php") {
                if (class_exists('Database')) {
                    require_once "{$path}{$arquivo}";
                }
            } else {
                require_once "{$path}{$arquivo}";
            }
        }
    }
    $diretorio->close();
}

/*
 * CARREGANDO AS MODELS
 */
if (MODEL_DIR != "") {
    $path = MODEL_DIR;
    $diretorio = dir($path);

    while ($arquivo = $diretorio->read()) {
        if ($arquivo != ".." && $arquivo != ".") {
            if (class_exists('Database')) {
                require_once "{$path}{$arquivo}";
            }
        }
    }
    $diretorio->close();
}
/*
 * CARREGANDO OS CONTROLLERS
 */
if (CONTROLLER_DIR != "") {
    $path = CONTROLLER_DIR;
    $diretorio = dir($path);

    while ($arquivo = $diretorio->read()) {
        if ($arquivo != ".." && $arquivo != ".") {
            require_once "{$path}{$arquivo}";
        }
    }
    $diretorio->close();
}

if (class_exists('Database')) {
    try {
        new pdo("mysql:host=" . Database::$host . ";dbname=" . Database::$dbname, Database::$username, Database::$password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch (PDOException $ex) {
        try {
            new pdo("mysql:host=" . Database::$host . ":" . Database::$port . ";dbname=" . Database::$dbname, Database::$username, Database::$password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (PDOException $ex) {
            if ($_GET["url"] != "ajax/sem-conexao") {
                $_GET["url"] = "app/sem-conexao";
            }
        }
    }
} else {
    if (isset($_GET["url"])) {
        if (substr_count($_GET["url"], "ajax") != 1) {
            if ($_GET["url"] != "app/database-config") {
                $_GET["url"] = "app/termo-uso";
            }
        }
    } else {
        if (isset($_GET["url"])) {
            if (substr_count($_GET["url"], "ajax") != 1) {
                $_GET["url"] = "app/termo-uso";
            }
        } else {
            $_GET["url"] = "app/termo-uso";
        }
    }
}

$start = new System();

