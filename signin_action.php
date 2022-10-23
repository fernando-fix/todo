<?php
require_once 'vendor/autoload.php';
use src\models\Auth;
$auth = new Auth;
$base = $auth->base;

$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

if($email && $password) {
    $auth->validate_login($email, $password);
}

$_SESSION['alert'] = 'Preencha os dois campos para efetuar login';
//caso passou por todas as validações e mesmo assim voltou aqui retorna para o login
header('Location: '.$base.'/signin.php');