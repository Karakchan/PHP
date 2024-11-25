<?php


//Note :: Interface can't include body
//Note :: Modifier must be public in Interface. cuz we need to overwrite
//Note :: To use an interface, a class must use to implements keyword.
//Note :: A class that implements an interface must implements all of the interface's methods.
//Note :: Can't contain properties / common methods but can contain constant variable

//Note :: Abstact method can't include body
//Note :: Any Modifier can set in sabstract
//Note :: To use an abstract method , a class must use to extends keyword.
//Note :: A  class that extends sub class must extends all of the abstract's methods.
//Note :: Can contain non static properties / static properties / common methods but can constant variable
//Note :: When ew set abstract methdo ! ! ! class must  e abstract class as well

// int_set()

//class method 
abstract class Myabstractmethod{

      public  $id = 50;
      public static $notifi = "New Article Created";
      const TITLE = "This is a new article for sport";

      //common Method 
      public function createpost(){
            echo "I am from create psot. Post title is = " . self::TITLE . "<br/>";
      }

      public function readpost(){
            echo "I am from read psot. ID  is = " . $this->id . "<br/>";
      }

      public function updatepost($id,$title){

      }

      public function deletepost($id){
            echo "I am delete post. ID is = {$id}"."<br/>";
      }

}

class Article  extends Myabstractmethod{
      public function updatepost($id,$title){
            echo "I am from Update. ID is {$id}. Title is {$title} . <br/>";
      }
}





echo "This is Abstract Method";

// ERROR :: We can't instantitate abstract class
// $obj1 = new Myabstractmethod();  

$obj2  = new Article();
echo $obj2->id;
echo "<br/>";
echo $obj2::$notifi; //New article created
echo "<br/>";
echo $obj2::TITLE; //This is a new article for sport
echo "<br/>";

$obj2->createpost();
$obj2->readpost();
$obj2->updatepost(20,"This is new psot 20");
$obj2->deletepost(100); ///

echo "<hr/>";



abstract class Info{
      abstract protected function name();
      abstract protected function age();
      abstract protected function professional($gender);

      public function getname(){
            return $this->name();
      }

      public function getage(){
            return $this->age();
      }

      public function getprofessinal($sex){
            return $this->professional($sex);
      }
}

class Boyclass extends Info{

       public function name(){
            return  "Aung Kyaw Kyaw";
      }
       public function age(){
            return "25";
      }
       public function professional($gender){

            switch($gender){
                  case "male":
                        $job = "Engineer";
                        break;
                  case "female":
                        $job = "Doctor";
                        break;
                  default:
                        $job = "Developer";
                        break;   
            }
            return $job;
      }
}


class Girlclass extends Info{

      protected function name(){
           return  "Mrs. Nyin Kyaw";
     }
      protected function age(){
           return 25;
     }
      protected function professional($gender){

           switch($gender){
                 case "male":
                       $job = "Engineer";
                       break;
                 case "female":
                       $job = "Doctor";
                       break;
                 default:
                       $job = "Developer";
                       break;   
           }
           return $job;
     }
}


$boyobj = new Boyclass();
$boyname = $boyobj->name();
$boyage = $boyobj->age();
$boypro = $boyobj->professional("male");

echo "{$boyname} is {$boyage} year old & he is an {$boypro} . <br/>";


// $girlobj = new Girlclass();
// $girlname = $girlobj->name();
// $girlage = $girlobj->age();
// $girlpro = $girlobj->professional("female");

// echo "{$girlname} is {$girlage} year old & he is an {$girlpro} . <br/>";


$girlobj = new Girlclass();
$girlname = $girlobj->getname();
$girlage = $girlobj->getage();
$girlpro = $girlobj->getprofessional("female");

echo "{$girlname} is {$girlage} year old & he is an {$girlpro} . <br/>";



?>