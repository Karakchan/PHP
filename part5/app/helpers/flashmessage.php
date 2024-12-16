<?php

session_start();

function flash($sessionname="",$message="",$class="alert alert-success"){
    
    if(!empty($sessionname)){

        if(empty($_SESSION[$sessionname]) && !empty($message)){

            $_SESSION[$sessionname] = $message;

        }elseif(!empty($_SESSION[$sessionname]) && empty($message)){

            echo "<div>".$_SESSION[$sessionname]."</div>";

            unset($_SESSION[$sessionname]);


        }
    }
}


?>


<!-- => set  -->
<!-- flash("login_success","You have successfully logged in!","alert alert-success); -->

