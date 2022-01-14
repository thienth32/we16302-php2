<?php
class Animal{

    function __construct($ipname, $ipage)
    {
        $this->name = $ipname;
        $this->age = $ipage;
    }

    // phương thức
    function sayHello(){
        return "Hello, my name is " . $this->name . "<br>Nice to meet you!";
    }

    function growUp($year){
        $this->age += $year;
    }
}

$duck = new Animal("Donal", 70);
$duck->hairColor = "yellow";
$dog = new Animal("Rex", 45);

?>

<h2>Name: <?= $duck->name ?></h2>
<h2>Age: <?= $duck->age ?></h2>
<p>Màu lông: <?= $duck->hairColor ?></p>
<p><?= $duck->sayHello() ?></p>
<?php
$duck->growUp(3);
?>
<h2>Sau khi lớn lên thì có Age: <?= $duck->age ?></h2>

<hr>
<h2>Name: <?= $dog->name ?></h2>
<h2>Age: <?= $dog->age ?></h2>
<p>Màu lông: <?= $dog->hairColor ?></p>
<p><?= $dog->sayHello() ?></p>
<h2>Sau khi lớn lên thì có Age: <?= $dog->age ?></h2>