<?php

// echo "hey";


//class object
class Mymethods{

 // Access Modifier
    // public = anyone can access
    // private = only access inside main class
    // protected = subclass / Extended class
    
    // Class Method / Method 
    public function  greeting(){
        echo "have a good day";
    }

    public function result($num = 1){
        echo "Getting result number is {$num} <br/>";
    }




}



$obj = new Mymethods();

echo "this is Class object <br/>";

$obj->greeting();
echo "<br/>";


$obj->result();      //1
$obj->result(100);  //100











?>