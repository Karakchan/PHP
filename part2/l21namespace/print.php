<?php

// oop concept

use gallery\Photo;

require_once ("Music.php");
require_once ("Video.php");
require_once ("gallery/Photo.php");


$musicobj = new Music();
$musicobj->play();

$videoobj = new Video();
$videoobj->play();


//*error = with namespace
// $photoobj = new Photo();
// $photoobj->play();

// Method 2
// $photoobj = new gallery\Photo();
// $photoobj->play();

$photoobj = new Photo();
$photoobj->play();
?>