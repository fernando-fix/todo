<?php

spl_autoload_register(function($class) {
    echo $class;
});

use src\models\User as User;

$user = new User;

