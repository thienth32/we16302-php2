<?php
namespace App\Controllers;

class LoginController{

    public function loginForm(){
        return "Trang login";
    }

    public function fakeLogin(){
        $_SESSION['auth'] = [
            "id" => 1,
            "name" => 'thienth'
        ];
        header('location: ' . BASE_URL);
        die;
    }
}

?>