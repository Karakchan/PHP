<?php

// =>if Statement

$x =10;
$y =20;

if($x > $y){
	echo "your Condition is yes";
}

if($x < $y){
	echo "your Condition is yes";
}


// if else

if($x > $y){
	echo "YES X greater than y";
}else{
	echo "No, x less than y";
}

// => short Hand

if($x < $y) echo "Yes, x is less than y";else "No,x greater than y";

$color = "gray";
$colorvalue = $color; //Assign by refrence

echo $color;
echo $colorvalue;

if($colorvalue === "red"){
	echo "My fav color is red";
}else{
	echo "I fav $color color";
}

// => Logical OPerator
// && (And) || (or)   !(Not)


$a = 100;
$b = 200;
$c = 300;

if($a < $b && $b > $c){
	echo "it is true";
}else{
	echo "it is false";
}

if(($a < $b && $b > $c) && $a > $c){
	echo "it is true";
}else{
	echo "it is false";
}

$a = 100;
$b = 200;
$c = 300;

if($a < $b && $b > $c){
	echo "it is true";
}else{
	echo "it is false";
}

if(!($a < $b)){
	echo "it is true";
}else{
	echo "it is false";
}

// => if() elseif() else

if($b > $c){
	echo "it is true";
}elseif($b === 200){
	echo "it is equal";
}else{
	echo "it is false";
}

if($b > $c) echo "it is true"; elseif($b === 200) echo "it is equal"; else echo "it is false";


if($b >$c)
	echo "it is true";
elseif($b =200)
	echo "it is equal";
else
	echo "it is false";


$phone = "iphone";
switch($phone){
	case "sony":
		echo "i can't buy sony Phone"
		break;
	case "iphone":
		echo "i hate apple products"
		break;
	case "mi":
		echo  "oki, i can buy"
		break;
	defualt;
		echo "i love keypad"
		break;
}
?>

