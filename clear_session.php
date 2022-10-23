<?php
require_once 'vendor/autoload.php';

use src\core\Config;

// Conexão e config
$config = new Config;
$base = $config->base;

$_SESSION['token'] = '';

header("Location: ".$base."/index.php");
exit;