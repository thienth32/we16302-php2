<?php
namespace App\Controllers;

class SubjectController{

    public function addForm(){
        include_once './app/views/subject/add-form.php';
    }

    public function saveAdd(){
        $name = $_POST['name'];
        var_dump($name);
    }
}

?>