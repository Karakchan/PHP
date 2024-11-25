<?php 

// => Super Global Variables
1. $GLOBALS 
2. $_SERVER 
3. $_REQUEST 
4. $_POST 
5. $_GET 
6. $_FILES 
7. $_ENV 
8. $_COOKIE 
9. $_SESSION

// => 1. $GLOBALS 

$x = 100;
$y = 200;

function sumresultone(){
		$GLOBALS['total'] = $GLOBALS["x"]+ $GLOBALS["y"];
		return $GLOBALS['total'];  
}

echo sumresultone();
echo $GLOBALS['total']; 
echo $total;


// 2. $_SERVER 

echo $_SERVER['PHP_SELF']; // file path 
echo $_SERVER['HTTP_USER_AGENT'];  // VERSION 
echo $_SERVER['HTTP_HOST'];   
echo $_SERVER['SERVER_NAME'];   
echo $_SERVER['SERVER_SOFTWARE']; 
echo $_SERVER['SERVER_PORT'];   
echo $_SERVER['SERVER_PROTOCOL']; 
echo $_SERVER['SERVER_SINGATURE'];   
echo $_SERVER['REQUEST_METHOD'];   
echo $_SERVER['REMOTE_ADDR']; 
echo $_SERVER['SCRIPT_FILENAME'];   
echo $_SERVER['SCRIPT_NAME'];   
echo $_SERVER['QUERY_STRING'];   



?>