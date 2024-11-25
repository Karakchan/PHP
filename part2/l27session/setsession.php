<?php

// => Note :: Session store on server (Super Global Variable)

session_start();

if(isset($_SESSION['idxcount'])){
    $_SESSION['idxcount']++;
}else{
    $_SESSION['idxcount'] = 1;
}
?>
