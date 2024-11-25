<?php


// ini_set("display_errors",1);

// =>(i) MySQLi Procedural 

        // DB Connect
        // mysqli_connect(host,dbusername,dbpassword,dbname);
        // mysqli_connect("localhost","root","Mydbsever#2025","phpone");



// =>  (ii)MySQLi object-Oriented

       // DB Connect
    //    $conn = new mysqli(sever/host,dbusername,dbpassword);
    // $conn = new mysqli("localhost","root","Mydbsever#2025");




// => (iii) PDO (PHP Data Object)

        // new PDO("mysql:host=host;dbname=dbname",dbusername,dbpassword);

        // $conn = new PDO("mysql:host=localhost;dbname=phpone","root","Mydbsever#2025");
        // $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ATTR_ERRMODEION)

    // => Method 1 
        // $dbhost = "localhost";
        // $dbuser = "root";
        // $dbpass = "Mydbsever#2025";
        // $dbname = "phpone";

        // $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,dbpass);
        // $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    // => Method 2
                // (Set DSN = Data Source Name)
        // $options = [PDO::ATTR_PERSISTENT=>true,PDO::ATTR_ERRMODE=>ERRMODE_EXCEPTION];
        // $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass,$options);



    //=>exercise

        // =>(i)Mysqli Procedural  (mysqli_close($conn))
    //    mysqli_connect("localhost","root","Mydbsever#2025","phpone");

    // if($conn->connect_error){
    //     echo "Connection Failed". $$conn->connect_error;
    // }else{
    //     echo "Connected Successfully";
    // }


    //    mysqli_connect("localhost","root","Mydbsever#2025","phpone");

    // if(mysqli_connect_error()){
    //     // echo "Connection Failed". $$conn->connect_error();
    //     // exit();

    //     die("Connected Failed".mysqli_connect_error());
    // }else{
    //     echo "Connected Successfully";
    // }

    // if($conn){
    //     // echo "Connection Failed". $$conn->connect_error();
    //     // exit();

    //     die("Connected Failed".mysqli_connect_error());
    // }else{
    //     echo "Connected Successfully";
    // }

 

    // =>(ii) Mysqli object-oriented  ($conn->close());

    //    $conn = new mysqli_connect("localhost","root","Mydbsever#2025","phpone");

   
    // if($conn->connect_error){
    //     // echo "Connection Failed". $$conn->connect_error;
    //     // exit();

    //     // die("Connected Failed".mysqli_connect_error);
    // }else{
    //     echo "Connected Successfully";
    // }
   

    // if($conn->connect_errorno){
    //     // echo "Connection Failed". $$conn->connect_errorno;
    //     // exit();

    //     // die("Connected Failed".mysqli_connect_errorno);
    // }else{
    //     echo "Connected Successfully";
    // }




   
    // (iii) PDO (PHP DATA Object) 

    // $dbhost = "localhost";
    // $dbuser = "root";
    // $dbpass = "Mydbsever#2025";
    // $dbname = "phpone";

   

    // try{

    //     $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
    //     $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    //     echo "Connected Successfully";

    // }catch(PDOException $e){
    //     die(("Connection Failed"). $e->getMessage());
    // }



   

?>