<?php

// =>Data Binding
      // (i) Staitc Binding (or) Early Binding
      // (ii) Dynamic Binding (or) Late Binding (or) Late Static Binding

                  // (i) Staitc Binding (or) Early Binding
                        // Compile time

                        //Binding everything before program running
                        //index.pnp >compile > Execute
                        //echo 1+1 10101110 2
                        //echo 1+1 10101110 2
                        //echo 1+1 10101110 2

                  // (ii) Dynamic Binding (or) Late Binding (or) Late Static Binding
                        // run time (static)
                        // index.php > Transpile > Execute
                        //echo 1+1 1010110 2


//Class Object
class hola1{
      public $name = "Ko Ko";

      public function friend(){
            return "My best friend name is". $this->name. "<br/>";
      }
   
      public function getfriend(){
            echo $this->friend();
      }
}

class hola2 extends hola1{
      public function friend(){
            return "My best friend name is". $this->name. " and Su Su.<br/>";
      } 
}


class hola3{
      public static $name = "Ko Ko";

      public static function friend(){
            return "My best friend name is". self::$name. "<br/>";
      }
   
      public static function getfriend(){
            echo self::friend();
      }
}


class hola4 extends hola3{
      public static function friend(){
            return "My best friend name is". self::$name. " and Yu YU.<br/>";
      } 
}

echo "This is My Binding <br/>";

$obj1 = new hola1();
echo $obj1->friend();
echo $obj1-> getfriend(); //My best friend name isKo Ko

$obj2 = new hola2();
echo $obj2->friend();
echo $obj2->getfriend(); //My best friend name isKo Ko and Su Su.



echo "<hr/>";


$obj3 = new hola3();
echo $obj3->friend();
echo $obj3-> getfriend(); //My best friend name isKo Ko

$obj4 = new hola4();
echo $obj4->friend();
echo $obj4->getfriend(); //My best friend name isKo Ko

echo "<hr/>";



?>