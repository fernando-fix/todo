<?php
namespace src\core;
use src\core\Connection;

class Config {
    
    public $base = 'http://localhost/todo';
    public $connection;

    public function __construct(){
        $this->connection  = new Connection();
    }
}