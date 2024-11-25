<?php

ini_set('display_errors',1);


echo "This is Mylambda style. <br/>";

function mycalculate($num1,$num2,$funone){
    $total = $num1 + $num2;
    $funone($total);
}

$myfunone  = function($result){
    echo "Total Result is = {$result} <br/>";
};

mycalculate(100,200,$myfunone);

function showresult($result){
    echo "Sum result is = {$result}";
};

$calfun = function($result){
    echo "Sum result is = {$result}";
};

$calfun = function($x,$y){
    return $x+$y;
};

showresult($calfun(100,500));


// => Lambda style with array_filter(array,callback)

$numbers = [10,50,33,22,56,53,79,99,23,33];

$filtereven = function($num){
    return $num % 2 == 0;
};

$getevens = array_filter($numbers,$filtereven);

echo "<pre>".print_r($getevens,true)."</pre>";

sort($getevens); // a to z
echo "<pre>".print_r($getevens,true)."</pre>";

echo "<hr/>";


// =>lambda style with array_walk (aray,callback, parameter)

// $color = array["a"=>"red","b"=>"green","c"=>"blue","d"=>"white"];




?>