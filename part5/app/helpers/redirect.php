<?php

function redirect($page){
    $redirecturl= ROOTURL.'/'.$page ;
    header("location".$redirecturl);
}

?>

<!-- $redirecturl("auth/login") -->