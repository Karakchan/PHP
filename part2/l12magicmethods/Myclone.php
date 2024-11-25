<?php

class Myclone{

    public function project($name){
        echo "I create a new ${name} project. <br/>";
    }

    public function task(){
        echo "I am a new task. <br/>";
    }

    public function  __call($method,$vals){ 
        echo "You not yet define these \"${method}\" non-static method .so your value are = "."<pre>" .print_r($vals,true) ."</pre>"."are here </br>";
    }

    public static function exam(){
        echo "i am new exam <br/>";
    }

    public static function __callstaitc($method,$vals){
        echo "You not yet define these \"${method}\" non-static method .so your value are = "."<pre>" .print_r($vals,true)."</pre>"."are here </br>";
    }
}

echo "This is my clone";

$obj1 = new Myclone();
$obj1->project("POS"); //I create a new POS project.
$obj1->project("Book Shop"); //I create a new Book Shop project.

$obj2 = $obj1;  // Copy by Reference
$obj2->project("CMS"); //I create a new CMS project.

$obj3 = clone $obj1; //Cloning
$obj3->project("E-wallet"); //I create a new E-wallet project.


// echo "<hr/>";

if(method_exists("Myclone","task")){
    $obj1->task();
}else{
    echo "NO method exist";
}


if(method_exists($obj1,"task")){
    $obj1->task();
}else{
    echo "NO method exist";
}

if(method_exists(new Myclone(),"task")){
    $obj1->task();
}else{
    echo "NO method exist";
}


if(method_exists(new Myclone(),"exam")){
    $obj1::exam();
}else{
    echo "NO method exist";
}


if(method_exists(new Myclone(),"exam")){
    $obj2::exam();
}else{
    echo "NO method exist";
}


if(method_exists(new Myclone(),"exam")){
    $obj3::exam();
}else{
    echo "NO method exist";
}



echo "<hr/>";


?>