<?php

// class A{

//     public static $age = 50;
//     const NAME = "Someone";

//     static function z(){
//         echo 123;
//     }
// }

// echo A::$age;
// A::$age = 100;
// echo "<br>" . A::$age;
// echo "<br>" . A::NAME;

// echo "<br>" . A::z();

try{
    
    $connect = new PDO("mysql:host=127.0.0.1;dbname=kaopiz;charset=utf8", "root", "12345678");
    if($_GET['passcode'] != "ABC1"){

        throw new Exception("Không đúng passcode, địa chỉ IP của người truy cập là: " . $_SERVER['REMOTE_ADDR']);
    }
}catch(Exception $ex){
    header("location: 404.php?msg=" . $ex->getMessage());
}

echo 1;



?>