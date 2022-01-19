<?php
namespace App\Controllers;
use App\Models\User;
class HomeController{

    public function index(){
        $users = User::all();
        
        include_once './app/views/homepage.php';
    }
}

?>