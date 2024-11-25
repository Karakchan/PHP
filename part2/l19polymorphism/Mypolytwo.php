<?php

abstract class Vehicle{
      abstract public function start();
      abstract public function stop();
}

class Car extends Vehicle{

      public function start(){
            echo "Car started <br/>";
      }

      public function stop(){
            echo "Car Stopped <br/>";
      }
}

class Ebike extends Vehicle{
      public function start(){
            echo "Ebike start <br/>";
      }

      public function stop(){
            echo "Ebike Stopped <br/>";
      }
}
echo "This is My Polymorphism Concept with abstract  <br/>";

$obj1 = new Car();
$obj1->start();  //Car started
$obj1->stop();   //Car Stopped


$obj2 = new Ebike();
$obj2->start();   //Ebike start
$obj2->stop();    //Ebike Stopped

echo "<hr/>";





?>