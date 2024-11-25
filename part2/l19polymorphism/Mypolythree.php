<?php
interface Greeting{
      public function speak();
}

class Myanmar implements Greeting{

      public function speak(){
            return "Mingalarpar";
      }
}


class Thailand implements Greeting{

      public function speak(){
            return "Sawadii";
      }
}


class Mon implements Greeting{

      public function speak(){
            return "Magay ya ohm";
      }
}


class English implements Greeting{

      public function speak(){
            return "Hello";
      }
}

function results($objs){

      foreach($objs as $obj){
            echo $obj->speak()."<br/>";
      }
}


echo "This is My Polymorphism Concept with Interface  <br/>";

$datas = [
      new Myanmar(),
      new Thailand(),
      new Mon(),
      new English()
];

results($datas);

echo "<hr/>"



?>