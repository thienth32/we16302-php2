<?php
spl_autoload_register(function ($class){
    require_once './' . str_replace("Core\\", "", $class) . ".php";
});

use Core\Database as DB;


$db = new DB();
$db->HelloWorld();

?>