<?php

ini_set('display_errors',1);

// The arguments (4 types)
// s=string
// i=integer
// d=double 
// b=blob



// =>(i) MySQLi Procedural 

//    $conn =  mysqli_connect("localhost","root","Mydbsever#2025","phpdbone");

//  if(mysqli_connect_error()){
//         echo "Connection Failed".mysqli_connect_error();
//         exit();
//     }else{
//         echo "Connection Successfully <br/>";
//     }


// $stmt = "INSERT INTO students(firstname,lastname,city) VALUE(?,?,?)";
// $insertstmt=mysqli_prepare($conn,$stmt);
// mysqli_stmt_bind_param($insertstmt,'sss',$firstname,$lastname,$city);

// $firstname = "maung";
// $lastname = "zaw";
// $city = "city";
// mysqli_stmt_execute($insertstmt);


// $firstname = "zaw";
// $lastname = "zaw";
// $city = "city";
// mysqli_stmt_execute($insertstmt);


// $firstname = "hinin";
// $lastname = "hin";
// $city = "city";
// mysqli_stmt_execute($insertstmt);

// echo "Inserted Successfully ";



// =>  (ii)MySQLi object-Oriented

// $conn = new mysqli('localhost','root','Mydbsever#2025',"phpdbtwo");

// if($conn->connect_errno){
//     echo "Connection Failed".$conn->connect_errno;
//     exit();
// }else{
//     echo "connected Successfully<br/>";
// }

// $stmt = $conn->prepare("INSERT INTO students(firstname,lastname,city) VALUE (?,?,?)");
// $stmt->bind_param('sss',$firstname,$lastname,$city);


// $firstname = "maung";
// $lastname = "zaw";
// $city = "city";
// $stmt->execute();


// $firstname = "zaw";
// $lastname = "zaw";
// $city = "city";
// $stmt->execute();


// $firstname = "hinin";
// $lastname = "hin";
// $city = "city";
// $stmt->execute();

//  echo "Insert Successfully";

// mysqli_stmt_close($stmt);
// mysqli_close($conn);

// //*** // => (iii) PDO (PHP Data Object)   1111111111111

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "Mydbsever#2025";
$dbname = "phpdbthree";

try{
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname","$dbuser","$dbpass");
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully<br/>";


    $stmt = $conn->prepare("INSERT INTO students(firstname,lastname,city) VALUE (:firstname,:lastname,:city)");
    $stmt->bindParam(":firstname",$firstname);
    $stmt->bindParam(":lastname",$lastname);
    $stmt->bindParam(":city",$city);


    $firstname = "maung";
    $lastname = "zaw";
    $city = "city";
    $stmt->execute();


    $firstname = "zaw";
    $lastname = "zaw";
    $city = "city";
    $stmt->execute();


    $firstname = "hinin";
    $lastname = "hin";
    $city = "city";
    $stmt->execute();

    echo "Inserted Successfully<br/>";

}catch(PDOException $e){
    echo "ERROR FOUND". $e->getMessage();
}

$conn = null;

?>