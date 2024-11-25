<?php

class Returntypehinting{

    public $name;

    public function setname(string $val):void{
        $this->name = $val;
    }

    public function getname():string{
        return $this->name;
    }
}

class Person extends Returntypehinting{
    public $userid;
    public $username;

    function setinfo(array $arr):void{
        $this->userid = $arr['id'];
        $this->username = $arr['name'];

    }
}







echo "This is Return Type Hinting <br>";

echo "<hr/>";

$obj1 = new Returntypehinting();
$obj1->setname("Aung Kyaw Kaye");
echo $obj1->getname(); 

echo "<br/>";

$obj2 = new Person();
$obj2->setname("su su");
echo $obj2->getname(); 


echo "<br/>";

$datas = ["id"=>1,"name"=>"Honey Nway Oo"];
echo $obj2->userid;
echo "<br/>";
echo $obj2->username; 

echo "<hr/>"


?>