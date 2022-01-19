<?php

abstract class BaseModel{

    protected $table;

    abstract public function insert();
    abstract public function update();
    abstract public function delete();
}

class User extends BaseModel{

    public function insert(){

    }
    public function update(){

    }
    public function delete(){

    }

}

class Product extends BaseModel{
    public function insert(){

    }
    public function update(){

    }
    public function delete(){

    }
}

?>