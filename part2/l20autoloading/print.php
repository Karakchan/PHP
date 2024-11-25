<?php

// oop concept


require_once "Music.php";
require_once "Video.php";
require_once "gallery/Photo.php";


$musicobj = new Music();
$musicobj->play();

$videoobj = new Video();
$videoobj->play();

$photoobj = new Photo();
$photoobj->play();


?>