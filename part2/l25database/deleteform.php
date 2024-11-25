<?php

ini_set("display_errors",1);



// => PDO

    $dbhost ="localhost";
    $dbuser ="root";
    $dbpass ="Mydbsever#2025";
    $dbname = "phpone";

        // DB Connect
        // mysqli_connect(host,dbusername,dbpassword,dbname);

        try{
            $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $stmt = $conn->prepare("SELECT id,name,email FROM users");
            $stmt->execute();

            // while($row = $stmt->fetch()){
            //     echo "id :" . $row['id']."name :".$row['name']."Email :".$row["email"]."</br>";
            // }


        }catch(PDOException $e){
            echo "Error Found :". $e->getMessage();
        }

        if(isset($_POST['submit'])){

            $qry= $conn->prepare("DELETE FROM users WHERE id=:id");
            $qry->bindParam(":id",$id);

            $id = $_POST['submit'];
            $qry->execute();

            echo  $qry->rowCount(). "User Delete successfully";

            $qry = null;
            $conn = null;

            // Redirectly by PHP
            $currentpage = $_SERVER['PHP_SELF'];
            header("Location:$currentpage");
            exit;

            // Redirect by javascript 

            echo "<script type='text/javascript'>
                // method 1
               //widow.location.href = window.location.href;

              // Method 2
              //window.location.replace(widow.location.href);

              //Method 3
              //window.location.assign(window.location.href);

            </scirpt>";
        }



?>


<!DOCTYPE html>
    <html>
        <head>
            <title>Delete Form</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        </head>
        <body>


            <div class="container">
                <div class="col-md-6 mx-auto">
                    <h3 class="text-center my-3">Delete Form</h3>
                     

                    <table class="table border table-hover">
                        <thead>
                            <tr>

                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php

                                while($row = $stmt->fetch()){

                                    $id = $row['id'];
                                    $name = $row['name'];
                                    $email = $row['email'];

                                    echo "<tr>";
                                        echo "<td>$id</td>";
                                        echo "<td>$name</td>";
                                        echo "<td>$email</td>";
                                        echo "<td><form action='' method='post'><button type='submit' name='submit' id='submit' class='btn btn-danger btn-sm rounded-0 value='$id'>Delete</button></form></td>";
                                    echo "</tr>";
                                }



                            ?>
                           
                        </tbody>


                    </table>
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