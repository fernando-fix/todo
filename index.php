<?php
require_once 'vendor/autoload.php';

use src\models\Auth;
use src\core\Config;

// Verificar login
$auth = new Auth();
$loggedUser = $auth->isLogged();

// Conexão e config
$config = new Config;
$base = $config->base;

?>

<h1>Você está logado como</h1>
<hr>
<h2>Dados do usuário logado</h2>
<hr>
<pre>
    <?php
    //Análise de variável
    echo '<pre>';
    print_r($loggedUser);
    echo '</pre>';
    ?>
</pre>
<hr>


<a href="<?= $base; ?>/clear_session.php">Efetuar Logout</a>