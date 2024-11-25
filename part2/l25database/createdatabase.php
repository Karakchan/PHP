<?php

ini_set('display_errors',1);




// =>(i) MySQLi Procedural 

//    $conn =  mysqli_connect("localhost","root","Mydbsever#2025","phpone");

//  if(mysqli_connect_error()){
//         echo "Connection Failed".mysqli_connect_error();
//         exit;
//     }else{
//         echo "Connection Successfully <br/>";
//     }


// $stmt = "CREATE DATABASE IF NOT EXISTS phpdbone";

//     if(mysqli_query( $conn,$stmt)){
//         echo "Database Create Successfully ";
//     }else{
//         echo "Error Found";
//     }

    // mysqli_close($conn);


// =>  (ii)MySQLi object-Oriented

// $conn = new mysqli('localhost','root','Mydbsever#2025');

// if($conn->connect_errno){
//     echo "Connection Failed".$conn->connect_errno;
//     exit();
// }else{
//     echo "connected Successfully<br/>";
// }

// $stmt = "CREATE DATABASE IF NOT EXISTS phpdbtwo";

// if($conn->query($stmt)){

//     echo "Database Create Successfully";
// }else{
//     echo "Error Found = ".$conn->error;
// }


//*** // => (iii) PDO (PHP Data Object)

// $dbhost = "localhost";
// $dbuser = "root";
// $dbpass = "Mydbsever#2025";

// try{
//     $conn = new PDO("mysql:host=$dbhost","$dbuser","$dbpass");
//     $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//     echo "Connected Successfully<br/>";

//     $stmt = "CREATE DATABASE IF NOT EXISTS phpdbthree";
//     $conn->exec($stmt);
// }catch(PDOException $e){
//     echo "ERROR FOUND". $e->getMessage();
// }

// $conn = null;
?>