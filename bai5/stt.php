<?php


namespace Models;
class Product{

    public function __toString()
    {
        return sprintf("something products");
    }
    protected $table = 'products';
    public static function where($tencot, $phepss, $giatri){
        $model = new static();

        $model->queryBuilder = "select * from " . $model->table
                ." where $tencot $phepss '$giatri' ";
        return $model;
    }

    public function get(){
        echo "ket noi csdl";
        echo "<br> thuc cau truy van " . $this->queryBuilder;
        echo "<br> tra ve ket qua";
    }

    public function test(){
        return new Product();
    }
}

namespace App;
use Models\Product;

// Product::where("name", "like", "%test%")->get();

$x = new Product();
$x->test();



?>