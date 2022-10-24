<?php
require_once 'vendor/autoload.php';
use src\models\Auth;
use src\dao\UserDaoMysql;
use src\models\User;

$auth = new Auth;
$base = $auth->base;

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, 'password');

if(!empty($name) && !empty($email) && !empty($password)) {

    $newUser = new User();
    $newUserDao = new UserDaoMysql($auth->connection);

    if(strlen($name) < 3) {
        $_SESSION['alert'] = 'Digite seu nome completo!';
        header('Location: '.$base.'/signup.php');
        exit;
    }
    if(strlen($password) < 4) {
        $_SESSION['alert'] = 'Senha deve ter pelo menos 4 caracteres!';
        header('Location: '.$base.'/signup.php');
        exit;
    }

    if($newUserDao->findByEmail($email) != false) {
        $_SESSION['alert'] = 'Este endereço de e-mail já está cadastrado!';
        header('Location: '.$base.'/signup.php');
        exit;
    }

    //hash password
    $newPass = password_hash($password, PASSWORD_DEFAULT);

    //gerar token
    $token = md5(time().rand(1,9999).time());
    $_SESSION['token'] = $token;

    $newUser->name = $name;
    $newUser->email = $email;
    $newUser->password = $newPass;
    $newUser->token = $token;

    $newUserDao->addUser($newUser);

    header('Location: '.$base);
    exit;
}

$_SESSION['alert'] = 'Preencha todos os campos!';
header('Location: '.$base.'/signup.php');
exit;