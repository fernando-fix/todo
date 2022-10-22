<?php
namespace src\core;
use PDO;

class Connection {
    
    //private 
    private $db_host = 'localhost';
    private $db_name = 'test';
    private $db_user = 'root';
    private $db_pass = '';

    public function __construct() {
        $connection = new PDO("mysql:dbname=$this->db_name;host=$this->db_host", $this->db_user, $this->db_pass);
        return $connection;
    }
}