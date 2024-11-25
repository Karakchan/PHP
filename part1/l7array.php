<?php 

// => Arrays
// (i) Indexed Array (Manual Array)
// (ii) Associataive
// (i) Multidimensional Array

// (i) Indexed Array (Manual Array)
$names = array("aung aung","maung maung","zaw zaw","kyaw kyaw");
	// echo $names;
	// print $names;

echo count($names); //4
var_dump($names);
print_r($names,false);

$colors = ["red","green","blue","black","white"];
echo $colors;

echo count($colors); //5
print_r($colors,false);
var_dump($colors);

echo "<pre>".print_r($colors,false)."</pre>"

$colors[5] ="gray";
$colors[6] ="skyblue";
$colors[7] ="yellow";
$colors[8] ="pink";
$colors[0] ="green";

echo count($colors); //5
echo "<pre>".print_r($colors,true)."</pre>";

// --------------------------------------------------------

//(ii)  Associative Array

$news = array("pone"=>"this is post one","ptwo"=>"this is post two","pthree"=>"this is post three");
echo count($news);
var_dump($medias);

$medias = [
	"pone"=>"this is post one",
	"ptwo"=>"this is post two",
	"pthree"=>"this is post three"
];
echo count($medias);
var_dump($medias);

$medias["pfour"] = "this is post four";
$medias["pthree"] = "this is new post pthree";

echo count($medias); //3
var_dump($medias);

echo "My fav color is " .$colors[8]; 


// (iii) Multidimensional Array (Arrays contains one or more arrays)

$paints = array(
	array("red","green","blue"),
	array("pen","pencil","ruler"),
	array("paper","plastic"),
);

echo count($paints); //3
var_dump($paints);

$maincolors = [
	["red","green","blue"],
	["pen","pencil","ruler"],
	["paper","plastic"]
];

echo count($maincolors); //3
var_dump($maincolors);

echo $maincolors[0][0]; //red
echo $maincolors[2][1]; //plastic

$persons = array(
	array("name" => "aung aung","age"=20),
	array("name" => "su su","age"=18),
	array("name" => "nu nu","age"=23),
);

$vippersons = [
	["name" => "aung aung","age"=20],
	["name" => "su su","age"=18],
	["name" => "nu nu","age"=23]
];

echo count($vippersons);
echo count($persons);
var_dump($vippersons);






?>