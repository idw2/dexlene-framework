<?php

Class AjaxController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        
    }

    public function test_connect() {
        header('Content-Type: application/json');

        $host = $_POST["host"];
        $username = $_POST["username"];
        $dbname = $_POST["dbname"];
        $password = $_POST["password"];

        try {
            $dbh = new pdo("mysql:host={$host};dbname={$dbname}", "{$username}", "{$password}", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

            $filename = CONFIG_DIR . 'database.php';
            if (file_exists($filename)) {
                @unlink($filename);
            }

            $fW = fopen(CONFIG_DIR . 'database.php', 'w');

            $class = "<?php
class Database{
    static \$host = '{$host}';
    static \$port = '{$porta}';
    static \$username = '{$username}';
    static \$dbname = '{$dbname}';
    static \$password = '{$password}';
}";

            fwrite($fW, $class);
            fclose($fW);

            die(json_encode(array('outcome' => true)));
        } catch (PDOException $ex) {
            die(json_encode(array('outcome' => false, 'message' => 'Unable to connect')));
        }
    }

    public function sem_conexao() {
        header('Content-Type: application/json');

        $filename = CONFIG_DIR . 'database.php';
        if (file_exists($filename)) {
            @unlink($filename);
        } 
        die(json_encode(array('outcome' => true)));
    }

    public function username_config() {

        header('Content-Type: application/json');

        $name = $_POST["name"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $repeat_password = $_POST["repeat_password"];

        if ($name == "") {
            die(json_encode(array('outcome' => false, 'message' => '* Required name!')));
        } elseif (!preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $email)) {
            die(json_encode(array('outcome' => false, 'message' => '* Invalid name!')));
        } elseif (!preg_match("/^[a-z0-9_-]{3,15}$/", $username)) {
            die(json_encode(array('outcome' => false, 'message' => '* The user field can not<br/>have invalid characters!')));
        } else if ($password != $repeat_password) {
            die(json_encode(array('outcome' => false, 'message' => '* Different passwords')));
        } else {

            $password = $this->senhaMd5($password);

            if (class_exists('Database')) {

                $user_id = $this->getPrimarykey();
                $group_id = $this->getPrimarykey();
                $premission_id = $this->getPrimarykey();

                $query = "
                    CREATE TABLE IF NOT EXISTS `users` (
                        `id` char(32) NOT NULL,
                        `username` varchar(255) NOT NULL,
                        `password` char(32) NOT NULL,
                        `created` datetime DEFAULT NULL,
                        `modified` datetime DEFAULT NULL,
                        `name` varchar(255) DEFAULT NULL,
                        `email` varchar(255) DEFAULT NULL,
                        `status` tinyint(1) DEFAULT '1',
                        `ordem` int(11) NOT NULL DEFAULT '0',
                        `owner` char(45) NOT NULL,
                        `trash` char(1) NOT NULL DEFAULT '0',
                        PRIMARY KEY(`id`)
                    ) ENGINE = InnoDB DEFAULT CHARSET = utf8;    

                    INSERT INTO users VALUES('{$user_id}', '{$username}', '{$password}', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, '{name}', '{email}', 1, 1,'owner', '0');

                    CREATE TABLE IF NOT EXISTS `groups` (
                        `id` char(32) NOT NULL,
                        `user_id` char(32) NOT NULL,
                        `created` datetime DEFAULT NULL,
                        `modified` datetime DEFAULT NULL,
                        `group` varchar(255) DEFAULT NULL,
                        `status` tinyint(1) DEFAULT '1',
                        `ordem` int(11) NOT NULL DEFAULT '0',
                        `owner` char(45) NOT NULL,
                        `trash` char(1) NOT NULL DEFAULT '0',
                        PRIMARY KEY(`id`)
                    ) ENGINE = InnoDB DEFAULT CHARSET = utf8;

                    INSERT INTO groups VALUES('{$group_id}', '{$user_id}', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, 'Admin', 1, 1,'{$user_id}', '0');

                    CREATE TABLE IF NOT EXISTS `premissions` (
                        `id` char(32) NOT NULL,
                        `group_id` char(32) NOT NULL,
                        `created` datetime DEFAULT NULL,
                        `modified` datetime DEFAULT NULL,
                        `add` char(1) DEFAULT NULL,
                        `edit` char(1) DEFAULT NULL,
                        `del` char(1) DEFAULT NULL,
                        `view` char(1) DEFAULT NULL,
                        `status` tinyint(1) DEFAULT '1',
                        `ordem` int(11) NOT NULL DEFAULT '0',
                        `owner` char(45) NOT NULL,
                        `trash` char(1) NOT NULL DEFAULT '0',
                        PRIMARY KEY(`id`)
                    ) ENGINE = InnoDB DEFAULT CHARSET = utf8;

                    INSERT INTO premissions VALUES('{$premission_id}', '{$group_id}', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, 1, 1, 1, 1, 1, 1,'{$user_id}', '0');";

                $sql = System::$factory->sql()->query($query);
                $sql->execute();
            }



            die(json_encode(array('outcome' => true)));
        }
    }

}
