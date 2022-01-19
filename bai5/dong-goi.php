<?php

class LopCha{

    public $name;
    protected $money;
    private $salary;
    public function setName($ipName){
        $this->name = $ipName;
    }

    public function getName(){
        return $this->name;
    }
    public function getPayment($dolar){
        $this->money = $dolar;
    }
    public function setSalary($dolar){
        $this->salary = $dolar;
    }
}

class LopCon extends LopCha{
    
    
}


$x = new LopCha();
$x->name = "nguyen van A";
$x->setSalary(1500);
var_dump($x);
?>