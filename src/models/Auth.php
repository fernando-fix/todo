<?php

namespace src\models;

use src\core\Config;
use src\dao\UserDaoMysql;

class Auth
{

    public $base;
    public $connection;

    public function __construct(){
        $config = new Config();

        $this->base = $config->base;
        $this->connection = $config->connection;
    }

    public function isLogged(){

        if (isset($_SESSION['token'])) {
            $token = $_SESSION['token'];
            $userDao = new UserDaoMysql($this->connection);
            $loggedUser = $userDao->findByToken($token);
            if ($loggedUser != false) {
                return $loggedUser;
            }
        }
        header("Location: " . $this->base . "/login.php");
        exit;
    }
}
