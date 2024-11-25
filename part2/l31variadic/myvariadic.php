<?php

ini_set('display_errors',1);

// (...) Spread Operator (used in javascript)
// (...) splat Operator (used in php, python)

// => Splat Operator(...)


function getval($val1,$val2,$val3){
    echo "Val1 result is = {$val1} <br/>";
    echo "Val2 result is = {$val2} <br/>";
    echo "Val3 result is = {$val3} <br/>";
}

getval("su su", "nu nu" ," yu yu"); 
// getval(["su su", "nu nu" ," yu yu"]); //error
getval(...["su su", "nu nu" ," yu yu"]); 



echo "This is VAraiadic Function <br/>";

function sumresult($num1,$num2,$num3){
    return $num1 + $num2 + $num3;
}

echo sumresult(1,2,3); //6
echo "<br/>";

//echo sumresult([1,2,3]); //error
echo sumresult(...[1,2,3]); //6
echo "<br/>";
echo sumresult(...[1,2,3,4]); //6

echo "<hr/>";


// => func_get_args()

function totalresult(){
    $arrs = func_get_args();
    //echo $arrs;
    // echo "<pre>".print_r($arrs,true)."</pre>";
    // echo count($arrs); //3

    $total = 0;

    // for($x = 0; $x < count($arrs); $x++ ){
    //     $total += $arrs[$x];
    // }

    // return $total;

    return array_sum($arrs);
}

echo totalresult(10,20,30); //60

// Splat Operator in Array 

$phones = ["apple","oppo",'vivo'];
$cars = ['toyota','mazda','suzuki'];
$computers = ['Dell',"Asus","Acer","HP"];

$myowns = [$phones,$cars,$computers];
echo "<pre>".print_r($myowns,true)."</pre>"; //multi dimational array


$yourowns = [...$phones,...$cars,...$computers];
echo "<pre>".print_r($yourowns,true)."</pre>"; //manual aaray

echo "<hr/>";


function myfunone($val){
    return $val ."<br/>";
}

echo myfunone("mango"); //mango
echo myfunone("mango",'apple'); //mango

function myfuntwo(...$val){
    return $val;
}

// echo myfuntwo('mango'); //array
echo "<pre>".print_r(myfuntwo("mango"),true)."</pre>";
echo "<pre>".print_r(myfuntwo("mango",'orange','apple'),true)."</pre>";
echo "<pre>".print_r(myfuntwo("100",200,400),true)."</pre>";
echo "<pre>".print_r(myfuntwo(["mango",'orange','apple']),true)."</pre>"; // multi dimentional array
echo "<pre>".print_r(myfuntwo(["mango",'orange','apple'],["fish",'cat','dog']),true)."</pre>";


function myfunthree(...$val){
    echo $val[1]. "<br/>";
}

myfunthree("su su",'nu nu','yu yu'); //nu nu
myfunthree(["su su","nu nu","yu yu"],"red","green","blue"); //red

// function myfunfour(...$val):string{
//     echo $val[2] . $val[0][2] .$val[1] . "<br/>";
// }
// echo(myfunfour(['su su','nu nu'],"is my elder sister","Ms .")); // is my elder sister


function myfunfive(string $name,int ... $age):string{
    return "{$name} is {$age[0]} years old <br/>";
}

echo myfunfive("su su",25);

function myfunsix(int ...$numbers):int{
    return array_sum($numbers);
};

echo myfunsix(1,3,2); //6


echo "<hr/>";

// function myfunsix(int ...$numbers):int{
//     return array_sum($numbers);
// }

// echo myfunsix(1,2,3); //6 
// echo "<br/>";

// function sayhi($greeting,...$names){
//     foreach($names as $name){
//         echo "{$greeting}, $name <br/>";
//     }
// }

// sayhi("Hello",'susu');

echo "<hr/>";


// => Coalescing Operator (??)

function myfunseven(...$val){
    echo $val[1] ? "Valid Data" : "No Data";
    echo "<br/>";
    echo $val[1] ?? "No Data";
}

myfunseven("Hello world","Dream World"); //Valid Data Dream World
myfunseven("hello world"); // No data no data

echo "<hr/>";

?>