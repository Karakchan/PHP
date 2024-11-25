<?php

class Myscoperesolutionoperator{

    // Member constant variables
    const GREETING = "Hello Friend, Good Evening From Thailand";
    const ThANKS = "Hi Friend. Thanks for visiting our country.";

    public $fullname = "Aung Kyaw Kyaw";

    // Member Method

    public function sayhifi(){
        echo self::GREETING;
    }

    public function saybye(){
        echo static::ThANKS;
    }

    public function __construct(){
        echo "I am start working by automatically from main class <br/>";
    }

}

class Child1 extends Myscoperesolutionoperator{

}

class Child2 extends Myscoperesolutionoperator{

      const GREETING = "Hello Student, Good Evening From SirLanka";
      const ThANKS = "Bye, See you Again&&.";
    
      // Member Method
  
      public function sayhifi(){
          echo self::GREETING;
      }
  
      public function saybye(){
          echo static::ThANKS;
      }
}

class Child3 extends Myscoperesolutionoperator{
    public function __construct(){
        // parent::__construct();
        // parent::saybye();
        echo "I am start working by automatically from sub class <br/>";
    }
}


echo "This is Scoperesolutionoperator <br/>";

$obj = new Myscoperesolutionoperator();
 echo $obj->fullname ."<br/>";
 echo $obj::GREETING ."<br/>"; //we can call sro
 echo "<br/>";
 echo Myscoperesolutionoperator::GREETING; 

$obj->sayhifi(); //
echo "<br/>";

$obj->saybye();
echo "<hr/>";
echo "<hr/>";

$ch1 = new Child1();
echo $ch1->fullname;
echo $ch1::GREETING;
echo "<br/>";
echo Child1::GREETING;


$ch1->sayhifi(); //
echo "<br/>";

$ch1->saybye();
echo "<hr/>";
echo "<hr/>";

$ch2 = new Child2();
echo $ch2->fullname;
echo "<br/>";
echo $ch2::GREETING;
echo "<br/>";
echo Child2::GREETING;
echo "<br/>";
$ch2->sayhifi(); 
echo "<br/>";
$ch2->saybye();

echo "<hr/>";

$ch3 = new Child3(); 
echo $ch3->fullname. "<br/>";
echo $ch3->GREETING. "<br/>";
echo Child3::GREETING. "<br/>";


echo "<hr/>";

?>