<?php
class C{
    function sayHello(){
        return "Hello everybody!";
    }
}

class B extends C{
    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function intro(){
        return "Hello, my name is " . $this->name . ", im " . $this->age . " year old";
    }
}

class A extends B{}

$x = new A("ducky", 20);

echo $x->intro();
echo "<br>";
echo $x->sayHello();


?>