<?php

// autoload
spl_autoload_register(function($class){
    require_once './' . str_replace("\\", "/", strtolower($class)) . '.php';
});


use A1\Animal;
use A2\Animal as Animal2;

$x = new Animal();
$y = new Animal2();

var_dump($x, $y);



?>