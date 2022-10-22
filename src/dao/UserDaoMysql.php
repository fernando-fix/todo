<?php
namespace src\dao;
require_once 'src/models/User.php';
use src\models\User;
use src\models\UserDao;

class UserDaoMysql implements UserDao {

    private $pdo;

    public function __construct($driver){
        $this->pdo = $driver;
    }

    public static function findByToken($token) {
        //code
    }

    public static function addUser(User $user){
        //code
    }

    public static function update(User $user){
        //code
    }

    public static function findById($id){
        //code
    }

    public static function findByEmail($email){
        //code
    }

    public static function deleteUser($id){
        //code
    }

    public static function testmsg() {
        echo 'teste ok';
    }
}