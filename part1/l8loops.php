<?php

// => PHP Looping 

// for
// foreach
// while
// do..while

$colorsones = ["red","green","blue","white","black","pink"];

echo count($colorsones);
var_dump($colorsones);

$colorsoneskey = array_keys($colorsones);
// echo $colorsones; error
var_dump($coloroneskey);

for($i=0; $i <  count($colorsones); $i++){ 
	// echo $i; //0 to 6
	echo "this is indexed array or manaul array by forloop = index key is". $i . "and value is =".$colorsones[$i];
}

foreach($colorsones as $colorsone){
	echo "This is indexed array or manual array by foreach = ".$colorsone;
}

foreach($colorsones as key=>$colorsone){
	echo "This is indexed array or manual array by foreach =index key is  ".$key ."and value is".$colorsone;
}

$x =0;
while($x < count($colorsones)){
 echo $coloroneskey[$x];
 echo $colorones[$x];
 $x++;
}

$y = 0;
do{
		echo "This is indexed array or manual array by foreach =index key is  ".$colorsonekey[$y] ."and value is".$colorsone[$y];
		$y++;

}while($y < count($colorsones))
?>

