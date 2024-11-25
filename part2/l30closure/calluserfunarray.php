<?php

ini_set('display_errors',1);

echo "This is call_user_fun_array() . <br/>";


function funone($num1,$num2){
      echo __FUNCTION__, "values are {$num1} and {$num2} <br/>";
}

funone(10,20); // funone values are 10 and 20

// call_usr_func_array(callback,array)
call_user_func_array("funone",[100,200]); // fun values are 100 and 200
call_user_func_array("funone",array(100,200)); // fun values are 100 and 200

class Hifi{
      function funtwo($num1,$num2){
            echo __METHOD__, "values are {$num1} and {$num2} <br/>";
      }
}

$obj = new Hifi();
$obj->funtwo(400,200); // Hif:: funtwo are 400 and 200

// call_user_func_array ([class,method,array])
call_user_func_array([$obj,"funtwo"],[400,200]); // fun values are 400 and 200
call_user_func_array([$obj,"funtwo"],array(400,200)); // fun values are 400 and 200



?>