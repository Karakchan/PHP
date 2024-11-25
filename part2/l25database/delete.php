<?php

ini_set('display_errors',1);




// =>(i) MySQLi Procedural 

//    $conn =  mysqli_connect("localhost","root","Mydbsever#2025","phpdbone");

//  if(mysqli_connect_error()){
//         echo "Connection Failed".mysqli_connect_error();
//         exit();
//     }else{
//         echo "Connection Successfully <br/>";
//     }


// $stmt = "DELETE FROM  students  WHERE id=1";

//     if(mysqli_query( $conn,$stmt)){
//         echo "Delete Create Successfully ";
//     }else{
//         echo "Error Found";
//     }

//     mysqli_close($conn);


// =>  (ii)MySQLi object-Oriented

// $conn = new mysqli('localhost','root','Mydbsever#2025',"phpdbtwo");

// if($conn->connect_errno){
//     echo "Connection Failed".$conn->connect_errno;
//     exit();
// }else{
//     echo "connected Successfully<br/>";
// }

// $stmt = "DELETE FROM students WHERE id=2";

// if($conn->query($stmt)){

//     echo "Delete Create Successfully";
// }else{
//     echo "Error Found = ".$conn->error;
// }


// //*** // => (iii) PDO (PHP Data Object)   1111111111111

// $dbhost = "localhost";
// $dbuser = "root";
// $dbpass = "Mydbsever#2025";
// $dbname = "phpdbthree";

// try{
//     $conn = new PDO("mysql:host=$dbhost;dbname=$dbname","$dbuser","$dbpass");
//     $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//     echo "Connected Successfully<br/>";


//     $stmt = "DELETE FROM students WHERE id=6";

//     $conn->exec($stmt);


//     echo "Delete Connected Successfully<br/>";

// }catch(PDOException $e){
//     echo "ERROR FOUND". $e->getMessage();
// }

// $conn = null;
?>