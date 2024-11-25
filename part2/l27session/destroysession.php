<?php

session_start();

// =>Single Destory Session
// unset($_SESSION['idxcount']);
// echo "session Destory Successfully";

// => All Destory Session

session_destroy();
echo "All session Destroy Successfully";


?>
