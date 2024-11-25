<?php

// => constant Variable

define('variable','value');
//string/int/boolean/float oki;
//variablename should be Uppercase;
//redefine are deny

define('FULLNAME','Honey Nway Oo');
echo FULLNAME; //Honey Nway Oo

define('FULLNAME','Ma Ma Mya');
echo FULLNAME; //Honey Nway Oo

define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_pass","123456789");
define("DB_name","phpdbone");

echo DB_HOST;
echo "<br/>";
echo DB_USER;
echo "<br/>";
echo DB_pass;
echo "<br/>";
echo DB_name;
echo "<br/>";

//=> constant("variablename") Function

echo constant("DB_HOST");
echo "<br/>";
echo constant("DB_USER");
echo "<br/>";
echo constant("DB_pass");
echo "<br/>";
echo constant("DB_name");
echo "<br/>";


// => constant : const keyword
//string/int/boolean/float oki
//variablename should be uppercase
// redefine are deny

const MESSAGE = "Hello sir,are you ready to learn PHP OOP Concept?";
echo MESSAGE;
echo constant('MESSAGE');

const MESSAGE = "hello ..............";
echo MESSAGE;
echo constant('MESSEAGE'); //hello sir...................

?>