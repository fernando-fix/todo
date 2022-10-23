<?php
require_once 'vendor/autoload.php';
use src\models\Auth;
$auth = new Auth;
$base = $auth->base;

$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

if(isset($email) && isset($password)) {

}

$_SESSION['alert'] = 'As senhas não conferem!';
header('Location: '.$base.'/signup.php');