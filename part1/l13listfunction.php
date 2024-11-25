<?php

$val1 = "Save Myanmar";
echo "val1 is ". is_string($val1);

$val2 = 0
echo "val2 is ". is_string($val2);

$val3 = ;50
echo "val3 is ". is_string($val3);

$val4 = "50";
echo "val4 is ". is_string($val4); //1

$val5 =  true;
echo "val5 is ". is_string($val5);

$val6 = "";
echo "val6 is ". is_string($val6); //1


$val7 = 50;
echo "val7 is ". is_numeric($val7); //1
echo "val7 is ". is_int($val7);  //1
echo "val7 is ". is_integer($val7); //1

$val8 = 34.34;
echo "val8 is ". is_numeric($val8); //1
echo "val8 is ". is_int($val8);   
echo "val8 is ". is_integer($val8);
echo gettype($val8); //float
echo gettype($val8)   //double 

$val9 = "50";
//**********
echo "val19 is ". is_numeric($val9); //1
echo "va19 is ". is_int($val9);
echo "va19 is ". is_integer($val9);

// => is_float(variable) function

$val9 = 40;
echo "val19 is " . is_float($val9);

$val10 = 34.44;
echo "val10 is " . is_float($val10); //1

$va11 = ".33";
echo "val20 is " . is_float($val11);

// => is_bool(variable) function

$val12 = true;
echo "val12 is ". is_bool($val12); //1
echo gettype($val12);  //boolean

$val13 = FALSE;
echo "val12 is ". is_bool($val13); //1

$val14 = "true";
echo "val12 is ". is_bool($val14);

$val15 = 1;
echo "val15 is ". is_bool($val15);



// =>is_array(variable) function

$val16= "Help Myanmar";
echo "val16 is ". is_array($val16);

$val17= ["Help Myanmar","save myanmar"];
echo "val17 is ". is_array($val17);  //1


// =>is_null(variable) Function

$val18= 0;
echo "val16 is ". is_null($val16);

$val19=null;
echo "val19 is ". is_null($val19); //1

$val20=null;
echo "val20 is ". is_Null($val20); //1

$val21=null;
echo "val21 is ". is_null($val21); //1

// => empty(variable) vs isset(variable)
	// note :: the following values are empty
	// 0
	// 0.0
	// "0"
	// ""
	// Null
	// false
	// []


$val21=[];

if(empty($val21)){
	echo "your variable is empty";
}

if(isset(var21)){
	echo "your variable with value";
}else{
	echo "Your variable without value";
}



// => isset() Vs unset()

$city = "Yango";
$country= "Thailand";
echo isset($city) ? "yes" : "NO";
echo $city; 
echo $country;

unset($city,$country);
echo $city;
echo $country;





?>

var_dump("") // data type

is_string
is_numberic
is_int
is_interger
is_float
is_bool
is_null
is_array
