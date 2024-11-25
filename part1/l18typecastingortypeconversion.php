<?php

// => Data Type
//     stream_set_blockingint
//     float
//     bool
//     array 
//     object
//     unset

// => Cast to String

   $val1 = "hello";//string
    var_dump($val1);
    $result = (string) $val1;
    var_dump($result);

    $val2 = 10;//int
    var_dump($val2);
    $result = (string) $val2;
    var_dump($result);

    $val3 = 35.5;//float
    var_dump($val3);
    $result = (string) $val3;
    var_dump($result);

    $val4 = true;//bool
    var_dump($val4);
    $result = (string) $val4;
    var_dump($result);  //string(1) "1"


    $val5 = null;//null
    var_dump($val5);
    $result = (string) $val5;
    var_dump($result);    //string(0) ""

// => Cast to Integer

$val1 = "hello";//string
var_dump($val1);
$result = (int) $val1;
var_dump($result);

$val2 = 10;//integer
var_dump($val2);
$result = (int) $val2;
var_dump($result);

$val3 = 35.5;//float
var_dump($val3);
$result = (int) $val3;
var_dump($result);

$val4 = true;//bool
var_dump($val4);
$result = (int) $val4;
var_dump($result);  //string(1) "1"

$val6= false; //bool
var_dump($val6);
$result = (int) $val6;
var_dump($result); //int(0)

$val5 = null;//null
var_dump($val5);
$result = (int) $val5;
var_dump($result);    //string(0) ""

// => Cast to float

$val1 = "hello";//string
var_dump($val1);
$result = (float) $val1;
var_dump($result);

$val2 = 10;//integer
var_dump($val2);
$result = (float) $val2;
var_dump($result);

$val3 = 35.5;//float
var_dump($val3);
$result = (float) $val3;
var_dump($result);

$val4 = true;//bool
var_dump($val4);
$result = (float) $val4;
var_dump($result);  //string(1) "1"

$val6= false; //bool
var_dump($val6);
$result = (float) $val6;
var_dump($result); //int(0)

$val5 = null;//null
var_dump($val5);
$result = (float) $val5;
var_dump($result);    //string(0) ""


// => Cast to boolean

$val1 = "hello";//string
var_dump($val1);
$result = (bool) $val1;
var_dump($result);

$val2 = 10;//integer
var_dump($val2);
$result = (bool) $val2;
var_dump($result);

$val3 = 35.5;//float
var_dump($val3);
$result = (bool) $val3;
var_dump($result);

$val4 = true;//bool
var_dump($val4);
$result = (bool) $val4;
var_dump($result);  

$val6= false; //bool
var_dump($val6);
$result = (bool) $val6;
var_dump($result); //int(0)

$val5 = null;//null
var_dump($val5);
$result = (bool) $val5;
var_dump($result); 

// => Cast to array

$val1 = "hello";//string
var_dump($val1);
$result = (array) $val1;
var_dump($result);

$val2 = 10;//integer
var_dump($val2);
$result = (array) $val2;
var_dump($result);

$val3 = 35.5;//float
var_dump($val3);
$result = (array) $val3;
var_dump($result);

$val4 = true;//bool
var_dump($val4);
$result = (array) $val4;
var_dump($result);  

$val6= false; //bool
var_dump($val6);
$result = (array) $val6;
var_dump($result); //int(0)

$val5 = null;//null
var_dump($val5);
$result = (array) $val5;
var_dump($result);    


// => Cast to object

$val1 = "hello";//string
var_dump($val1);
$result = (object) $val1;
var_dump($result);

$val2 = 10;//integer
var_dump($val2);
$result = (object) $val2;
var_dump($result);

$val3 = 35.5;//float
var_dump($val3);
$result = (object) $val3;
var_dump($result);

$val4 = true;//bool
var_dump($val4);
$result = (object) $val4;
var_dump($result);  

$val6= false; //bool
var_dump($val6);
$result = (object) $val6;
var_dump($result); //int(0)

$val5 = null;//null
var_dump($val5);
$result = (object) $val5;
var_dump($result);    

// => Cast to null

$val1 = "hello";//string
var_dump($val1);
$result = (unset) $val1;
var_dump($result);

$val2 = 10;//integer
var_dump($val2);
$result = (unset) $val2;
var_dump($result);

$val3 = 35.5;//float
var_dump($val3);
$result = (unset) $val3;
var_dump($result);

$val4 = true;//bool
var_dump($val4);
$result = (unset) $val4;
var_dump($result);  

$val6= false; //bool
var_dump($val6);
$result = (unset) $val6;
var_dump($result); //int(0)

$val5 = null;//null
var_dump($val5);
$result = (unset) $val5;
var_dump($result);    




    


?>