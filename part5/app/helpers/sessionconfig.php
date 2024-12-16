<?php


// => Auth Check (check user login our not)
function authcheck(){
    if(isset($_SESSION['user_id'])){
        return true;
    }else{
        return false;
    }
}


// =>  Auth check by dyn key
function authset($key = "user_id"){
    return isset($_SESSION[$key]);
}


// => logout 
function logout(){
    session_unset();
    session_destroy();
}


?>