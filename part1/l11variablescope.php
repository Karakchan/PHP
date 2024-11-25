<?php

// => Variables Scope
	// (i) Global Variables Scope
	// (i) Local Variables Scope
	// (i) Static Variables Scope

$num1 = 100; //	// (i) Global Variables Scope

function fun1(){
	echo "Global Variables print =  $num1";
}

fun1(); 	//  Global Variables errror


echo "Global variable print outside = $num1"; //	// (i) Global Variables outside =100


function fun2(){
	$num2 = 200;
	echo "Local variable print in function = $num2";
}

fun2(); //Local variable print in function = 200

echo "Local variable print in function = $num2" //errror


// => global keywork

$num3 = 300;
$num4 =400;

function fun3(){

	global $num3, $num4;
	global $result;
	$result = $num3 + $num4;
	echo "This is result , print by fun3 = $result";
}


fun3();
echo result;



// super Global Variable
$num5 = 500;
$num6 = 600;

function fun4(){
	$GLOBALS["sum"] = $GLOBALS["num5"] + $GLOBALS["num6"];
}


fun4();
echo "Local Variable Print Outside = $sum";

$num7 = 700;

function fun5(){
	global $num7;

	$num7++;
	echo $num7;
}

fun5();
fun5();
fun5();
fun5();



function fun6(){

	$num8 = 800;

	$num8++;
	echo $num8;
}

fun6();
fun6();
fun6();
fun6();

?>