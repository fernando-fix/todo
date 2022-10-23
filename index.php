<?php
require_once 'vendor/autoload.php';
use src\models\Auth;

// Verificar login
$auth = new Auth();
$loggedUser = $auth->isLogged();

echo 'Usuário Loggado';