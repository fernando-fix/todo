<?php
require_once 'vendor/autoload.php';

use src\core\Config;
use src\dao\UserDaoMysql;

$c = new Config;

//mostrando o valor da base
echo 'valor da base: '.$c->base.'<br>';

//mostrando a conexão com banco de dados
echo '<pre>';
print_r($c->connection);
echo '</pre>';

//teste chamando classe estática em userdaomysql
UserDaoMysql::testmsg();