<?php


require_once("vendor/autoload.php");  

use app\Music;
use app\Video;
use app\gallery\Photo;
use app\gallery\animateshow\Portrait;
use app\gallery\slidehow as slider;
use app\gallery\Models\Article;
use config\Auth;



$music = new Music();
$music->play();
// / ka reat yout yin error tat mal ma add yin

$video = new Video();
$video->play();

$photo = new Photo();
$photo->play();

$portrait = new Portrait();
$portrait->play();

$image = new slider\Image();
$video->play();

$image = new slider\Image();
$video->play();


$article = new Article();
$article->index();


$auth = new Auth();
$auth->login();







?>



<!-- PSR 4 (PHP Standard Recommendation Version 4) -->
 <!-- composer dump-autoload -->
   <!-- composer dump-autoload -o -->

   <!-- 
        cd l24psr4autoload
        composer dump-autoload
        composer dump-autoload -o (update)


   -->