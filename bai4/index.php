<?php
// spl_autoload_register(function($class){
//     require_once './' . strtolower(str_replace("\\", "/", $class)) . ".php";
// });
require_once './vendor/autoload.php';
use Models\Product;
use Models\User;
use Controllers\HomeController;
use Controllers\UserController;

$x = new Product();
$y = new User();
$z = new HomeController();
$w = new UserController();

var_dump($x, $y, $z, $w);
?>