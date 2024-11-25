<?php

class Magicconstant{

      public function getclassname1(){
            echo __CLASS__."<br/>";
      }

      public function getclassname2(){
            echo get_class($this)."<br/>";
      }

      public function getfunname1(){
            echo __FUNCTION__."<br/>";
      }

      public  static function getfunname2(){
            echo __FUNCTION__."<br/>";
      }

      public function getmthname1(){
            echo __METHOD__."<br/>";
      }

      public  static function getmthname2(){
            echo __METHOD__."<br/>";
      }

      public function getdir(){
            echo __DIR__."<br/>";
      }

      public function getfile(){
            echo __FILE__."<br/>";
      }

      public function getline(){
            echo __LINE__."<br/>";
      }
}

trait Mytrait{
      public $email = "honey@gmail.com";
      public $password = "123456";

      public function gettrait(){
            echo __TRAIT__. "</br>";
      }
}

class  Authlogin{
      use Mytrait;

      public function login(){
            echo "This is user login . Email is $this->email & Password is $this->password. <br/>";
      }
}
echo "This is Magic constant <br/>";

$obj = new Magicconstant();

$obj->getclassname1(); //Magicconstant
$obj->getclassname2(); //Magicconstant

$obj->getfunname1(); //getfunname1
$obj->getfunname2(); //getfunname1

$obj->getmthname1(); //Magicconstant::getmthname1
$obj->getmthname2(); //Magicconstant::getmthname1

$obj->getdir();  //var/www/html/phpbatch4/part2/l13magicconstants
$obj->getfile(); ///var/www/html/phpbatch4/part2/l13magicconstants/Magicconstant.php
$obj->getline(); // 38 

echo "<hr/>";

$obj2 = new Authlogin();
$obj2->login(); //This is user login . Email is honey@gmail.com & Password is 123456.
$obj2->gettrait(); //Mytrait






?>