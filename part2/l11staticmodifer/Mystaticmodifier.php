<?php

class Mystaticmodifier{

      //Static Property 
     public static $count = 0;

      //Non-static property
     public $idx = 0;

     public function getvalue(){

            self::$count++;
            echo self::$count ."<br/>";

            $this->idx++;
            echo "$this->idx. <br/>";
      }

     public function getresult(){

            self::$count++;
            echo self::$count ."<br/>";

            $this->idx++;
            echo "$this->idx. <br/>";
     }

   
}

class Baby1 extends Mystaticmodifier{


}


class Baby2 extends Mystaticmodifier{

      public function getmore(){

            self::$count++;
            echo self::$count ."<br/>";

            $this->idx++;
            echo "$this->idx. <br/>";
      }
}







echo "This is My Static Modifier <br/>";

$obj1 = new Mystaticmodifier();
echo $obj1::$count; ///0 Static Property
echo "<br/>";
echo $obj1->idx; ///0 Non-static Property
echo "<br/>";


$obj1->getresult(); //1 1
$obj1->getresult(); //2 2
$obj1->getresult(); //3 3
$obj1->getresult(); //4 4


$obj1->getvalue(); //5 5 
$obj1->getvalue(); //6 6 
$obj1->getvalue(); //7 7
$obj1->getvalue(); //8 8



echo "<hr/>";
echo "<hr/>";


$obj2 = new Baby1();


$obj2->getresult(); //9 1
$obj2->getresult(); //10 2
$obj2->getresult(); //11 3
$obj2->getresult(); //12 4


$obj2->getvalue(); //13 5 
$obj2->getvalue(); //14 6 
$obj2->getvalue(); //15 7
$obj2->getvalue(); //16 8

echo "<hr/>";
echo "<hr/>";

$obj3 = new Baby1();



$obj3->getresult(); //17 1
$obj3->getresult(); //18 2
$obj3->getresult(); //19 3
$obj3->getresult(); //20 4


$obj3->getvalue(); //21 5 
$obj3->getvalue(); //22 6 
$obj3->getvalue(); //23 7
$obj3->getvalue(); //24 8

echo "<hr/>";
echo "<hr/>";

$obj4 = new Baby2();
$obj4->getmore(); //25 1
$obj4->getmore(); //26 2
$obj4->getmore(); //27 3
$obj4->getmore(); //28 4







echo "<hr/>";





?>