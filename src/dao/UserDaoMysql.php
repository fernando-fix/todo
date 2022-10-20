<?php
namespace src\dao;
use src\models\User;
use src\models\UserDao;

class UserDaoMysql implements UserDao {

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