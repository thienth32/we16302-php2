<?php
namespace App\Core;
class Form{

    public static function begin($act = "", $med = "get"){
        echo sprintf("<form action='%s' method='%s'>", $act, $med);
        return new static();
    }

    public static function end(){
        echo sprintf("</form>");
    }
}

?>