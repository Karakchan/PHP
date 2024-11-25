<?php

// Using PDO (PHP Data Object)

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "Mydbsever#2025";
$dbname = "phpdbfive";

try{
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
}catch(PDOException $e){
    echo "Error Fount :". $e->getMessage();
}

?>