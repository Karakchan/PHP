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


// $stmt = "UPDATE students SET lastname= 'khine' WHERE id=1";

//     if(mysqli_query( $conn,$stmt)){
//         echo "Update Create Successfully ";
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

// $stmt = "UPDATE students SET lastname='moe' WHERE id=2";

// if($conn->query($stmt)){

//     echo "Update Create Successfully";
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


//     $stmt = "UPDATE students SET city='Mandalay' WHERE id=6";

//     $conn->exec($stmt);


//     echo "Update Connected Successfully<br/>";

// }catch(PDOException $e){
//     echo "ERROR FOUND". $e->getMessage();
// }

// $conn = null;


//*** // => (iii) PDO (PHP Data Object) 222222222222222

// $dbhost = "localhost";
// $dbuser = "root";
// $dbpass = "Mydbsever#2025";
// $dbname = "phpdbthree";

// try{
//     $conn = new PDO("mysql:host=$dbhost;dbname=$dbname","$dbuser","$dbpass");
//     $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//     echo "Connected Successfully<br/>";

//     $conn->exec("INSERT INTO students(firstname,lastname,city) VALUE ('kay','Thi','Shan')");
//     $conn->exec("INSERT INTO students(firstname,lastname,city) VALUE ('May','Thi','Shan')");
//     $conn->exec("INSERT INTO students(firstname,lastname,city) VALUE ('Yin Yin','MON','Shan')");
//     $conn->exec("INSERT INTO students(firstname,lastname,city) VALUE ('Khaing','AYe Lwin','Shan')");



//     echo "Insert Connected Successfully<br/>";

// }catch(PDOException $e){
//     echo "ERROR FOUND". $e->getMessage();
// }

// $conn = null;
?>