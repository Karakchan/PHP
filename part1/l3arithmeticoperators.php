<?php

// => Arithmetic Operators
// +-*/%

$num1 = 100;
$num2 = 200;
$num3 = 30.28;
$city = "Mawlamyine";
$car = false;
$myarrs = ["mg mg","Kyaw Kyaw"];
$colors = array("red","blue");

echo $num1;
echo $num2;
echo $num1+$num2;
echo $num2-$num1;
echo $num2/$num1;
echo $num2%$num1;

// var_dump();
var_dump($num1);
var_dump($city);
var_dump($num);
var_dump($car);
var_dump($myarrs);

$num4 = true;
$num5 = "10";
$num6 = '20';

var_dump($num5,$num6);
echo $num5+$num6; //30
echo $num6-$num5  //10
echo $num4+$num5; //11
var_dump($num5+$num6); //int (30)

//Overwrite or Override

$num5 = 50;
$num6 = '60';
var_dump($num5,$num6); //int string

echo $num5+$num6; //110

?>