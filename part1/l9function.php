<?php

	// User Defined Function
	
	// function name(){
	// 	code to be executed;
	// }

//--------------------------------

// Parapmeter Function (or) Arguments Functions
// (i)Single
// (ii)Multi

// function name($arg1){
// 	code to be executed;
// }

// function name($arg1,$arg2){
// 	code to be executed;
// }

//----------------

// Default Parameter Function (or) Default Argument Function

// function name($name="aung aung",$age="20"){
// 	code to be executed;
// }


//--------------------
function myfun(){
	echo "my name is mr.tin";

	myfun();
}

function myfun1(){
	$num1 = 10;
	$num2 = 20;
	$num3 = 30;
	$cal  = $num1+ $num2;
	echo $cal;
}

myfun1();

//-----------

function singlefun($name){
	echo "My name is $name";

}

singlefun("aung aung");
singlefun("su su");


function(multifun($name,$age)){
	echo "MY name is $name and i am $age year old."
}

multifun("Kyaw Kyaw",20);
multifun("Aung Aung",40);

function defualtfun($name="hla hla"){
	echo "my name is ${name}.";
}
defualtfun();

function default1($num1 =10, $num2 =20, $name3=30){
	$cal = $num1+ $num2 + $num3;
	echo ${cal}.;
}

default1();

// return function
function myreturn($num1){
	$cal = $num1 + 10;
	return $cal;
}

echo myreturn(50);

function myreturn1($num1){
	return $cal = $num1 + 20;

}
echo myreturn1(22);

function myreturn2($num1,$num2,$num3){
	return $cal = $num1 + $num2 + $num3;
}
echo $myreturn2(30,20,50);

function myreturn3($num1 = 10, $num2 = 20, $num3 = 20){;
return $cal = $num1 + $num2 + $num3;
}
echo myreturn3(20);
echo myreturn3();


//dynamic function call 

$dym1 = myreturn3();
echo $dym1;

$dym2 = "myreturn3()";
echo $dym2;
?>