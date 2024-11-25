<?php

ini_set('display_errors',1);

echo "This is lambda function(also know as anonymous functions or closures . <br/>";

$num1 = 300;
$num2 = 400;

function myfunone(){
      global $num1,$num2;
      echo "This is regular function, My getting value are = ".$num1 + $num2."</br>";
};

myfunone(); 

$myfuntwo = function() use($num1,$num2){
      echo "This is closure function. My getting values is = ". $num1 + $num2. "</br>";
};



$myfuntwo();


// =>  Closure Function With array_walk(array,callback)

$numbers = [1,2,3,4,5,6,7,8,9,10];

$totalresult = 0;

$calculatefun = function($num) use(&$totalresult){
      $totalresult += $num;
};

array_walk($numbers,$calculatefun);

echo "Total sun result is = ". $totalresult; //Total sum result is = 55;



// =>lambda style with array_walk (aray,callback(val,key,per), parameter)

$colors = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"white");
$idx = 0;

// array_walk($colors,function($val,$key,$per) use(&$idx){
//       $idx++;
//       echo "Index is {$idx}, key is = {$key} and Value is {$val} {$per} <br/>";
// });

?>