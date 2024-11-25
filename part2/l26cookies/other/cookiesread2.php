<?php

echo $_COOKIE;

echo "<pre>".print_r($_COOKIE,true)."</pre>";

if(isset($_COOKIE['mmk'])){
    echo "mmk is stand for". $_COOKIE['mmk']. "<br/>";
}


if(isset($_COOKIE['thb'])){
    echo "thb is stand for". $_COOKIE['thb']. "<br/>";
}





?>


    