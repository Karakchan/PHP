<?php

class Mymagicmethods{

      public $num;
      private $name;
      protected $age;

      public function __construct($val){
            // // property_exists(classname,property)

            // if(property_exists("Mymagicmethods","num")){
            //       echo $this->num = $val;
            // }else{
            //       echo "Property doesn't exits";
            // }

                // property_exists(classname,property)

            if(property_exists($this,"num")){
                  echo $this->num = $val;
            }else{
                  echo "Property doesn't exits";
            }
      }
 
}

class Mymagicone{

      public $greeting = "hello";

      public function __get($var){
            echo "You not yet defined this \"${var}\" property. <br/>";
      }

      public function __set($var,$val){
            echo "You not yet defined this \"${var}\" property. so your value \"${val}\" is not set<br/>";
      }
}
class Mymagictwo{

      public function sayhi(){
            echo "Hello i am sayhi non-static method <br/>";
      }

      public static function saybye(){
            echo "Hello i am sayhi static method <br/>";
      }

            //for non static method
      public function __call($method,$vals){
            echo "You not yet defined this \"${method}\" non-static method. "."<pre>".print_r($vals,true)."</pre>";
      }

           //for static method
           public function __callstaitc($method,$vals){
            echo "You not yet defined this \"${method}\" non-static method. "."<pre>".print_r($vals,true)."</pre>";
      }


      // public function __get($var){
      //       echo "You not yet defined this \"${var}\" property. <br/>";
      // }

      // public function __set($var,$val){
      //       echo "You not yet defined this \"${var}\" property. so your value \"${val}\" is not set<br/>";
      // }
}

class Mymagicthree{
      public function __invoke(){
            echo "Hello sir, i am working cuz you are trying to print out your class object as method:";
      }
}


class Mymagicfour{
      public function __toString(){
            echo "Hello sir, i am working cuz you are trying to print out your class object as method";
      }
}



echo "This is Magic Methods <br/>";

$obj = new Mymagicmethods(100);


echo "<hr/>";

$obj1 = new Mymagicone();
echo $obj1->greeting;
echo "<br/>";
echo $obj1->hay; //You not yet defined this "hay" property.

echo $obj1->byebye = "Good Bye"; //

echo "<hr/>";

$obj2= new Mymagictwo();
$obj2->sayhi();  //Hello i am sayhi non-static method
$obj2::saybye(); //Hello i am sayhi static method

$obj2->sayhifi();
$obj2->sayhifi("greeting"); //You not yet defined this "sayhifi" non-static method.

$obj2->sayhifi("greeting","bye bye"); //You not yet defined this "sayhifi" non-static method.


// $obj2::sayhaylo();
// $obj2::sayhaylo("greeting");
// $obj2::sayhaylo("greeting","bye bye");


echo "<hr/>";

$obj3 = new Mymagicthree();
$obj3(); //Hello sir, i am working cuz you are trying to print out your class object as method:
echo "<hr/>";


// $obj4 = new Mymagicfour();
// echo $obj4; //Hello sir, i am working cuz you are trying to print out your class object as method:

echo "<hr/>";







?>