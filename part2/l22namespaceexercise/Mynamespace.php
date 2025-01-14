<?php

ini_set('display_errors',1);

// echo __DIR__; // /var/www/html/phpbatch4/part2/l22namespacexerciser/Music.pp

use gallery\slideshow\Image;
use gallery\slideshow as viewer;

spl_autoload_register(function($classname){

    echo "loading the class = {$classname} <br/>";

    // $file = $classname;
    $file = str_replace('\\','/',$classname)."php";

    echo $file . "<br/>";



    if(file_exists($file)){
        require_once (__DIR__."/".$file);
    }else{
        echo "No File Exists";
    }
});


$musicobj = new Music();
$musicobj->play();

$videoobj = new Video();
$videoobj->play();


//*error = with namespace
// $photoobj = new Photo();
// $photoobj->play();

$photoobj = new gallery\Photo();
$photoobj->play();


$portrait = new gallery\animateshow\Portrait();
$portrait->play();


$portrait = new Image();
$portrait->play();


$portrait = new viewer\Picture();
$portrait->play();





?>