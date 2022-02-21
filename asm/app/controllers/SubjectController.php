<?php
namespace App\Controllers;

use App\Models\Subject;

class SubjectController{
    public function index(){
        $subjects = Subject::all();
        return view('subject.index', [
            'subjects' => $subjects,
            'name' => 'thienth'
        ]);
    }

    public function addForm(){
        include_once './app/views/subject/add-form.php';
    }

    public function saveAdd(){
        $name = $_POST['name'];
        var_dump($name);
    }

    public function editForm($id, $name = "default"){
        var_dump($id, $name);die;
    }
}

?>