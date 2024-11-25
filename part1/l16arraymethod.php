<?php

// => array_combine(key,value) Function

$name = ['aung aung','su su','kyaw kyaw','hla hla'];
$age = [30,22,33,55];

$result = array_combine($name,$age);
echo "<pre>".print_r($result,true)."</pre>";
echo $result["kyaw kyaw"]; //33

$vehicles = ['toyota','ford','bmw','audi','mazda','suzuki'];
echo count($vehicles);

// array_count_values(array) function
$cars = ['toyota','ford','bmw','audi'];
echo "<pre>".print_r(array_count_values($car),true)."</pre>";
$brands = ['toyota','ford','bmw','audi'];
echo "<pre>".print_r(array_count_values($brands),true)."</pre>";


?>