<?php

ini_set("display_errors",1);


if(isset($_POST['submit'])){
    //echo "Form Submitted";


    $getname = textfilter($_POST['name']);
    $getemail = textfilter($_POST['email']);
    $getpassword = textfilter($_POST['password']);

    echo $getname;
    echo $getemail;
    echo $getpassword;

}

function textfilter($data){
    $data = trim($data);   //space ma par lar say chin
    $data = htmlspecialchars($data); //html code no translate
    $data = stripslashes($data);     //
    return $data;

}


// => MySQLi Procedural 

        // DB Connect
        // mysqli_connect(host,dbusername,dbpassword,dbname);
        $conn = mysqli_connect("localhost","root","Mydbsever#2025","phpone");

        if($conn->connect_error){
            echo "Failed to conncet mysqli = ". $conn->connect_error;
            exit();
        }else{
            echo "Connected Successfully <br/>";
        }

        // Data Insert (For MySQLi Procedural )

            // 1.db connect 
            // 2. query
            // 3.prepare (encrypt)
            // 4. bind_param(decrypt)
            // 5.execute (for computer understand data)
            // 6. close
         
        $stmt = "INSERT INTO users(name,email,password) VALUE (?,?,?)";
        $insertstmt = mysqli_prepare($conn,$stmt);
        mysqli_stmt_bind_param($insertstmt,'sss',$getname,$getemail,$getpassword);
        mysqli_stmt_execute($insertstmt); //extract for computer understand

        echo "New User Create Successfully";

        mysqli_close($conn);






?>


<!DOCTYPE html>
    <html>
        <head>
            <title>Register Form</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        </head>
        <body>


            <div class="container">
                <div class="col-md-6 mx-auto">
                    <h3 class="text-center my-3">Register Form</h3>
                        <form action="" method="POST">

                            <div class="form-group mb-3">
                                <label for="name">Full Name</label>
                                <input type="text" name="name" id="name" class="form-control" autocompleted="off"/>
                            </div>

                            <div class="form-group mb-3">
                                <label for="name">Email</label>
                                <input type="email" name="email" id="email" class="form-control" autocompleted="off"/>
                            </div>

                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control " autocompleted="off"/>
                            </div>

                            <input type="submit" name="submit" id="submit" class="btn btn-primary float-end" value="Sing Up"/>

                        </form>
                </div>
            </div>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        </body>
    </html>


<!-- 
CREATE TABLE IF NOT EXISTS users(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    name VARCHAR(20),
    email VARCHAR(20),
    password VARCHAR(255)
); -->