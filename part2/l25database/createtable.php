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


// $stmt = "CREATE TABLE IF NOT EXISTS students(
//         id INT NOT NULL AUTO_INCREMENT PIMARY KEY,
//         firstname VARCHAR(30) NOT NULL,
//         lastname VARCHAR(30) NOT NULL,
//         city VARCHAR(30),
//         created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
//         updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

//     if(mysqli_query( $conn,$stmt)){
//         echo "Database Create Successfully ";
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

// $stmt = "CREATE TABLE IF NOT EXISTS students(

//     id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     firstname VARCHAR(30) NOT NULL,
//     lastname VARCHAR(30) NOT NULL,
//     city VARCHAR(30),
//     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
//     updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if($conn->query($stmt)){

//     echo "Tabke Create Successfully";
// }else{
//     echo "Error Found = ".$conn->error;
// }


//*** // => (iii) PDO (PHP Data Object)

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "Mydbsever#2025";
$dbname = "phpdbthree";

try{
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname","$dbuser","$dbpass");
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully<br/>";


    $stmt = "CREATE TABLE IF NOT EXISTS students(

    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    city VARCHAR(30),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

    $conn->exec($stmt);
    echo "Table Connected Successfully<br/>";

}catch(PDOException $e){
    echo "ERROR FOUND". $e->getMessage();
}

$conn = null;
?>