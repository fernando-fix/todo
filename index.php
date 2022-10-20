<?php
require 'vendor/autoload.php';
use src\models\User;
use src\dao\UserDaoMysql;

$user = new User; //quando eu comento esta linha da erro

$newUser = new UserDaoMysql;
$newUser->testmsg();