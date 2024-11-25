<?php


//json_encode(array);

// json_decode(array);
// json_decode(array,true);



$colors = ["red",'blue','green'];
echo $colors; //PHP Notice: Array to string conversion..
var_dump($colors); //array(3) 

$mycolors = json_encode($colors);
echo $mycolors;  //["red","blue","green"]
var_dump($mycolors); //string(22) '[red,blue,green];

$students = ['name'=>"aung aung","age"=>25,"city"=>"Yangon"];
var_dump($students);
echo $students['name']; 
echo $students['age'];
echo $students["city"];

$studentinfo = json_encode($students);
echo $studentinfo;
var_dump($studentinfo);


?>