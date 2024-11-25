<?php

// =>strlen(string) function

$words = "save myanmar";
echo strlen($words); //12

// =>str_word_count(string) function
// =>str_word_count(string,return) function

$text = "save myanmar country";
echo str_word_count($text); //3

echo str_word_count($text,0); //3
echo "<pre>".print_r(str_word_count($text,1),true)."</pre>";
echo "<pre>".print_r(str_word_count($text,2),true)."</pre>";

// => ucwords(string) function //upper Case(uc)
// => ucwords(string,delimiters) function

$country = "welcome to myanmar country.i live in yangon";
echo ucwords($country); //Welcome To Myanmar Country,i Live In Yangon
echo ucwords($country,"."); //Welcome to myanmar country.I live in yangon

// =>ucfirst(string) Function 
$message = "welcome to yangon,i live in tamwe";
echo ucfirst($message); //Welcome to yangon,i live in tamwe

// =>lcfirst(string) Function 
$message = "Welcome To Yangon,i live in tamwe";
echo lcfirst($message); //welcome To Yangon,i live in tamwe

// =>strtoupper(string) Function //stringtoupper(strtoupper)
$string = "welcome to moble legend";
echo strtoupper($string); //WELCOME TO MOBLE LEGEND

// =>strtolower(string) Function 
$str = "Welcom To MobilE leGend";
echo strtolower($str); //welcom to mobile legend


// =>chuck_split(string,lenght,delimeter) Function
$letters = "Myanmar Country";
echo chunk_split($letters,1,"."); //M.y.a.n.m.a.r. .C.o.u.n.t.r.y.
echo chunk_split($letters,3,"-"); //Mya-nma-r C-oun-try-

// => substr(string,start,index/offest,end length) Function
$country = "welcome Myanmar";
echo substr($country,0); //welcome Myanmar
echo substr($country,8); //Myanmar
echo substr($country,0,7); //Welcome
echo substr($country,0,9) //welcome M


// => strpos(string,find) Function
//  => strrpos(string,find) function
// => stripos(string,find) Function
// => strripos(string,find) Function

$captions = "Lorem Ipsum is simply dummy text of the printing and typesetting industry";
echo strpos($captions,"Ipsum" ); //6 (index number)
echo strrpos($captions,"Ipsum"); //74 (index number)
echo stripos($captions,"Printing"); //40(index number)
echo strripos($captions,"Ipsum"); //74 (index number)


// => str_replace(search,replace,string) Function

$topic = "Save Myanmar";
echo str_replace("Myanmar","CRPH",$topic); //Save CRPH

// => substr_replace(string,replace,start index, end length) Function
$greeting = "welcome Myanmar";
echo substr_replace($greeting,"Hello",0) //Hello
echo substr_replace($greeting,"Thailand",8) //Hello Thailand

echo substr_replace($greeting,"hello",0,0) //Hellowelcome Myanmar
echo substr_replace($greeting,"hello",0,3) //hellocome Myanmar

// =>trim() Function
// =>trim(string,characters) Function

$title = "Welcome to My Country";
echo trim($title); //Welcom to my Country

$subtitle = "Welcome to My Country";
echo trim($subtitle,"Wel"); //come to country
echo trim($subtitle,"try"); //Welcome to My Coun

// => ltrim() Function
// => ltrim(string,characters) function
$sayhi = "/Mingalarpar/";
echo ltrim($sayhi,"/"); //Mingalarpar/

// => rtrim() Function
// => rtrim(string,characters) function
$sayhi = "/Mingalarpar/";
echo rtrim($sayhi,"/"); // /Mingalarpar

// => str_repeat() function
// =>  str_repeat(string,count) function
echo str_repeat("A Kyal Gyi",4); //A Kyal GyiA Kyal GyiA Kyal GyiA Kyal Gyi

// => strcmp(string1,string2) Function (case sensitive)
// 0 = if the two string are equal
// <0 = if string 1 less than string2
// >0 = if stirng1 greater than string2

echo strcmp("I Love My Job","I Love My Job") //0
echo strcmp("I Love My Job","I Love ") //6
echo strcmp("I Love ","I Love My Job") //-6

//  => explode(separator,string, limit) Function
$words = "Welcome to My Country";
echo "<pre>".print_r(explode(" ",$words),true)."</pre>";

echo "<pre>".print_r(explode(" ",$words,0),true)."</pre>";  //[0] => Welcome to My Country
echo "<pre>".print_r(explode(" ",$words,1),true)."</pre>"; //
echo "<pre>".print_r(explode(" ",$words,2),true)."</pre>"; //[0] => Welcome[1] => to My Country
echo "<pre>".print_r(explode(" ",$words,3),true)."</pre>"; //[0] => [0] => Welcome[1] => to [2] => My Country

// =>implode(separator,array) function
$words = ['welcome','to','my','city'];
echo implode(' ',$words); //welcome to my city
echo implode('_',$words) //welcome_to_my_city

// =>join(separator,array) function  ***
$words = ["welcome",'to','my','village'];
echo join(" ",$words); //welcome to my village
echo join("_",$words); //welcome_to_my_village

// => number_format(number) Function
// => numver_format(numver,decimals)

echo number_format("100000"); //100,000
echo number_format("100000",2); //100,000.00

// => stripslashes(string) function
$str = 'he\'s my mother';
echo $str; //he's my mother

$str = 'he\'s my father';
echo $str; //he\'s my father
echo stripslashes($str) //he's my father

// => basename(string) function ****
// => basename(path,suffix)

$path = "./assets/img/cover.jpg";
echo $path; //"./assets/img/cover.jpg"
echo basename($path); //cover.jpg
echo basename($path,".jpg") //cover

// => pathinfo(path) function
// => pathinfo(path,flags)

//PATHINFO_DIRNAME
//PATHINFO_BASENAME
//PATHINFO-EXTENSION
//PATHINFO_FILENAME

$filepath = "./assets/img/user/cover.jpg";
echo "<pre>".print_r(pathinfo($filepath),true)."</pre>";
echo pathinfo($filepath)["dirname"]; // ./assets/img/user
echo pathinfo($filepath)["filename"]; // cover
echo pathinfo($filepath)["extension"]; // jpg

echo pathinfo($filepath,PATHINFO_DIRNAME);
echo pathinfo($filepath,PATHINFO_BASENAME);
echo pathinfo($filepath,PATHINFOEXTENSION);
echo pathinfo($filepath,PATHINFO_FILENAME);













?>