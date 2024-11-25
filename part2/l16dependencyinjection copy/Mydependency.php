<?php


// int_set("display_errors",1);

//class method 
class Mydependency{
      public $courseidx;

      public function __construct($val){
            $this->courseidx = $val;
      }
      
      public function getcourseidx($val){
            echo "course idx is = " . $this->courseidx. "<br/>";
      }

}

class Lesson extends Course{
      public $lessonidx;

      public function __construct($val){
            $this->lessonidx = $val;
      }
      
      public function getcourseidx($val){
            echo "Lesson Idx is = " . $this->lessonidx. "<br/>";
      } 
}

//Parent to child 

class Vehicle{
      public $modelnumber;
      public $evcarobj;
      public $carmodelobj;

      public function __construct($val,$price,$type){
            $this->modelnumber = $val;
            $this->evcarobj = new Evcar($price);
      }
}

class Evcar extends Vehicle{
      public $price;

      public function __construct($price){
            $this->price = $price;
      }

      public function getprice(){
            echo "EV car Price is =".$this->price . "<br/>";
      }
}
echo "This is My dependency  Injection. <br/>";

$getcourse = new Course(1);
$getcourse->getcourseidx(); //course Idx is = 1

$getlesson = new Lesson(20);
$getlesson->getlessonidx(); //course Idx is = 20



echo "<hr/>";


// // => Child to Parent

// class Phone{

//       public $brand;

//       public function __construct($val){
//             $this->$brand = $val;
//       }

//       public function getbrand(){
//             return "Phone brand is = ", $this->brand . "<br/>";
//       }


// }

// class Phonemodel extends Phone{

//       public $price;

//       public function __construct($val, phone, $phone){
//             $this->price = $val;
//             $this->brand = $phone->getbrand();
//       }

//       public function getprice(){
//             echo "Price is = " . $this->price. "<br/>";
//       }
// }


// $phoneobj = new Phone("iPhone");
// echo $phoneobj->getbrand(); //Phone brand is = iphone

// $phonemodelobj = new Phonemodel(500,$phoneobj);
// $phonemodelobj->getbrand(); // Phone brand is = Phone brand is = iPhone

// echo $phonemodelobj->brand; // Phone brand is = iPhone

?>