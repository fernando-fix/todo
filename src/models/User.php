<?php
namespace src\models;

class User {
    public $id;
    public $name;
    public $email;
    public $password;
    public $token;
    public $avatar;
}

interface UserDao {
    public static function addUser(User $user);
    public static function update(User $user);
    public static function findById($id);
    public static function findByEmail($email);
    public static function deleteUser($id);
    public static function testmsg();
}