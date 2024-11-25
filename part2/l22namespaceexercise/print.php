<?php

ini_set('display_errors',1);

use gallery\Photo;
use gallery\animateshow\Portrait;

require_once ("Music.php");
require_once ("Video.php");
require_once ("gallery/Photo.php");  //Method 1 Method 2

require_once ("gallery/animateshow/Portrait.php");  //Method 1 Method 2



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



// Method 1
// $portrait = new gallery\animateshow\Portrait();
// $portrait->play();



$portrait = new Portrait();
$portrait->play();



?>