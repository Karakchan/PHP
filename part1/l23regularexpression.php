<?php

$string = "We are family";
echo $string;

// preg_match(pattern,string);

// $result = preg_match("We are family",$string); //error
$result = preg_match("/We are family/",$string); //true
$result = preg_match("/family/",$string); //true
$result = preg_match("/Family/",$string); //false
$result = preg_match('/mily/',$string); //true

$result = preg_match('/mily$/',$string); //true
$result = preg_match('/family$/',$string); //true
$result = preg_match('/Family$/',$string); //false
$result = preg_match('/are$/',$string); //false
$result = preg_match('/we$/',$string); //false

$result = preg_match("/^mily/",$string); //false
$result = preg_match("/^are/",$string); //false
$result = preg_match("%^we%",$string); //false
$result = preg_match("/^We/",$string); //true

$result = preg_match("/^family$/",$string); //false NOte:: string must be exact "family"
$result = preg_match('/^$/',$string); //false       note:: string must be empty

$result = preg_match("/^we/",$string); //false
$result = preg_match("/^we/i",$string); //true
$result = preg_match("/^We/i",$string); //true


$result = preg_match("/[b-d]/",$string); //false
$result = preg_match("/[a-f]/",$string); //true
$result = preg_match("/[a-z]/",$string); //true
$result = preg_match("/[A-Z]/",$string); //true
$result = preg_match("/[1-5]/",$string); //false

$string = "my lucky number is 567";
$result = preg_match('/[0-4]/',$string); //false
$result = preg_match('/[5-9]/',$string); //true
$result = preg_match('/[a-z]/',$string); //ture
$result = preg_match('/[A-Z]/',$string); //ture
$result = preg_match('/[a-z]/',$string); //ture
$result = preg_match('/[A-Z]|[a-z]/',$string); //ture
$result = preg_match('/^[a-z]/',$string); //ture
$result = preg_match('/[a-z]$/',$string); //false
$result = preg_match('/^[5-9]/',$string); //false
$result = preg_match('/[5-9]$/',$string); //ture

$result = preg_match ("/[^a-z]/",$string); //true Note:: it's mean that not included a to z! , result is true cuz $string included spacing and digit
$result = preg_match("/[^5-9]/",$String); // true Note:: it's mean that not include 5 to 9 ! , result is true cuz $string included spacing and digit
$result = preg_match ("/[^0-4]/",$String); //true Note:: it's mean that not included 0 to 4 !, result is true cuz $string included spacing and digit 

$string = "admin@gmail.com";

$result = preg_match('/@/',$string); //true
$result = preg_match('/m/',$string); //true
$result = preg_match('/m+/',$string); //true
$result = preg_match('/b+/',$string); //false
$result = preg_match('/b*/',$string); //true
$result = preg_match('/b?/',$string); //true

$result = preg_match('/m{1}/',$string); //true
$result = preg_match('/m{2}/',$string); //false

$string= "adminn@gmail.com";
$result = preg_match("/n{1}/",$string); //true
$result = preg_match("/n{2}/",$string); //true
$result = preg_match("/n{3}/",$string); //false
$result = preg_match("/n{2,3}/",$string); //true  {min,max}
$result = preg_match("/n{2,}/",$string); //true
$result = preg_match("/\s/",$string); //false






// preg_replace(pattern,replacement,string);

$string = "I love PHP";
$result = preg_replace("/php/","javascript",$string); //I love PHP
$result = preg_replace("/php/i","javascript",$string); //I love javascript
$result = preg_replace("/\s/","",$string); //IlovePHP

 
// Bracket Expressions
$string = "admin123@gmail .com";

$result = preg_replace("/[[:space:]]/",'',$string); //admin123@gmail.com
$result = preg_replace("/[[:space:]]/",'x',$string); //admin123@gmailx.com
$result = preg_replace("/[[:alpha:]]/",'x',$string); //xxxxx123@xxxxx .xxx
$result = preg_replace("/[[:digit:]]/",'x',$string); //adminxxx@gmail.com
$result = preg_replace("/[[:alnum:]]/",'x',$string); //xxxxxxxx@xxxxx .xxx
$result = preg_replace("/[[:punct:]]/",'x',$string); //admin123@gmail xcom

$result = preg_replace("/[[:lower:]]/",'x',$string); //Axxxx123@xxxxx .Cxx
$result = preg_replace("/[[:upper:]]/",'x',$string); //Xdmin123@gmail .Xom


$string = "Are you ready to learn PHP Framework";
$result = preg_replace(['/php/i','/framework/'],['javascript','libraries'],$string);  //Are you ready to learn javascript Framework
$result = preg_replace(['/php/i','/framework/i'],['javascript','libraries'],$string);  //Are you ready to learn javascript libraries


$string = "My lucky number is 007 but i got ticket number 5700";
$result = preg_replace('/[0-9]/','x',$string); //My lucky number is xxx but i got ticket number xxxx
$result = preg_replace('/[0-9]+/','x',$string); //My lucky number is x but i got ticket number x
echo $result;


                            // no limit =0 or null
//preg_split(pattern,string,limit,flags);
$string = "My lucky number is 007";
$result = preg_split("/\s/",$String);
//echo $result; //error Array to string converstion
echo "<pre>".print_r($result,true)."</pre>";
echo $result[0];
echo $result[4];

$result = preg_split("/\s/",$string,2);
echo "<pre>".print_r($result,true)."</pre>";
echo $result[0];
echo $result[1];

// preg_ quote(string,delimiter);

$string = "He\'s my father, do you know him ?";
$result = preg_quote($string); // He\\'s my father, do you know him \?
$string = preg_quote($string,"o"); //He \\'s my father, d\o y\ou kn\ow him \?


 $string = "aungkyaww@cisco.com";
 $result = preg_match('/@(?=cisco)/',$string);  //true (positive lookahead)
 $result = preg_match('/(?<=@)cisco/',$string); //true (                   )


 $result = preg_match('/@(?=cisco)/',$string); //false  (negative lookahead)
 $result = preg_match('/(?<!@)cisco/'$string); //false 0 (negative lookahead)
echo $result;



?>


<!-- 
    $ must be in end(case sensitive)
    ^ must be start (case sensitive) ,caret or circumflex 
    [] range a-z A-Z 0-9
    m+ must contain at leaset one m and more
    b* can contain b or not and more
    b? can contain b or not and more
    m(nth) contain place m as per nth and more
    m(nth,nth) contain place m as per nth and more
    m(nth,) contain place m as per nth and more

    \s space
    \d digit
    \D any no digit
    \w any word [a-z][A-Z][0,9]
    \W any word @#$*
    any character
    ()this
    + must
    * can

    p(hp)* can be contain hp
    p(hp)+ must be contain hp

    [[:space:]] space
    [[:alpha:]] alphabetic
    [[:digit:]] digit
    [[:alnum:]] alphanumberic
    [[:punct:]] puncturation
    [[:upper:]] upper-case





 -->