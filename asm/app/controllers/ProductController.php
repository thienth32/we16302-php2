<?php
namespace App\Controllers;
use App\Models\Product;
class ProductController{

    public function index(){
        $products = Product::all();
        echo "<pre>";
        var_dump($products);die;
    }
}

?>