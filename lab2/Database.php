<?php
namespace Core;
use PDO;
class Database{
    public function __construct()
    {
        $this->conn = new PDO("mysql:host=127.0.0.1;dbname=we16302-php2;charset=utf8", "root", "12345678");
    }

    public function HelloWorld(){
        echo "Hello world!";
    }
}

?>