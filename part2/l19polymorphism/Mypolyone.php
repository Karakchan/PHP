<?php


class Language{
      
      public $name;
      public $citizen;

      public function __construct($val1,$val2){
            $this->name = $val1;
            $this->citizen = $val2;
      }

      public function speak(){
            echo "say Something ... </br>";
      }
}

class Burmese extends language{ 

      public function speak(){
            echo "Hello Mingalarpar......</br>";
      }
}

class Thai extends language{ 

      public function speak(){
            echo "Hello  Sawadikap ......</br>";
      }
}

echo "This is My polyone <br/>";

$obj1 = new Burmese("Honey Nway Oo ","Burmese");
echo $obj1->name; //Honey Nway Oo
echo '<br/>';
echo $obj1->citizen; //Burmese
echo '<br/>';
$obj1->speak(); //Hello Mingalarpar...


$obj2 = new Thai("Ma Ma Mya","Thai");
echo $obj2->name; //Ma Ma Mya
echo '<br/>';
echo $obj2->citizen; //Thai
echo '<br/>';
$obj2->speak(); //Hwello Sawadikap....



echo "<hr/>";





?>