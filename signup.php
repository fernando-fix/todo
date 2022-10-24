<?php
require_once 'vendor/autoload.php';
use src\models\Auth;
$auth = new Auth;
$base = $auth->base;

//alertas
$alert = '';
if(isset($_SESSION['alert'])) {
    $alert = $_SESSION['alert'];
}
$_SESSION['alert'] = '';

//tentativa de cadastro
$cadEmail = '';
if(isset($_SESSION['email'])) {
    $cadEmail = $_SESSION['email'];
}
$_SESSION['email'] = '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/sign.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="main">
        <div class="container">
            <div class="center-box">
            <form action="<?= $base; ?>/signup_action.php" method="post">

                    <h3 class="sm-tittle">Cadastro</h3>

                    <?php if($alert != ''): ?>
                        <div class="btn bg-red"><?= $alert; ?></div>
                    <?php endif; ?>
                    
                    <input class="inp" type="text" name="name" placeholder="Digite seu nome completo..." autofocus>
                    
                    <input class="inp" type="email" name="email" placeholder="Digite seu e-mail..." autocomplete="off" value="<?= $cadEmail; ?>">

                    <input class="inp" type="password" name="password" placeholder="Digite sua senha...">

                    <button class="btn bg-blue">Cadastrar</button>
                </form>
                    <a class="btn bg-gray" href="signin.php">Login</a>
            </div>
        </div>
    </div>
</body>
</html>