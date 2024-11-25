<?php

ini_set("display_errors",1);



// => MySQLi Object-Oriented 

        // DB Connect
        // mysqli_connect(host,dbusername,dbpassword,dbname);
        $conn = new mysqli("localhost","root","Mydbsever#2025","phpone");

        if($conn->connect_errno){
            die("Connection Failed :"  . $conn->connect_errno);
        }else{
            echo "Connected Successfully <br/>";
        }

        $sql = "SELECT id,name,email,password FROM users";
        $results = $conn->query($sql);

        echo "$results->num_rows";


if(isset($_POST['submit'])){

            $stmt = $conn->prepare("UPDATE users SET name=?,email=?,password=? WHERE id=?");
            $stmt->bind_param('sssi',$name,$email,$password,$id);
        
        

            $id = $_POST['userid'];
            $name = textfilter($_POST['name']);
            $email = textfilter($_POST['email']);
            $password = textfilter($_POST['password']);
            $stmt->execute();
        
            // echo $getname;
            // echo $getemail;
            // echo $getpassword;
        
        // Data Insert

            // 1.db connect 
            // 2. query
            // 3.prepare (encrypt)
            // 4. bind_param(decrypt)
            // 5.execute (for computer understand data)
            // 6. close
         
        echo "New User Create Successfully";

        $stmt->close();
        $conn->close();

}



function textfilter($data){
    $data = trim($data);   //space ma par lar say chin
    $data = htmlspecialchars($data); //html code no translate
    $data = stripslashes($data);     //
    return $data;
}






?>


<!DOCTYPE html>
    <html>
        <head>
            <title>Update Form</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        </head>
        <body>


            <div class="container">
                <div class="col-md-6 mx-auto">
                    <h3 class="text-center my-3">Update Form</h3>
                        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

                            <div class="form-group mb-3">
                                <label for="userid">User ID</label>
                                <select name="userid" id="userid" class="form-control">
                                    <!-- <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option> -->

                                        <?php

                                            if($results->num_rows > 0){
                                                    while($row = $results->fetch_assoc()){
                                                        $id = $row['id'];
                                                        echo "<option value='$id'>$id</option>" ;
                                                    }
                                            }else{
                                                echo "<option value=''>No Data</option>";
                                            }

                                        ?>

                                </select>
                            </div>
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

                            <input type="submit" name="submit" id="submit" class="btn btn-primary float-end" value="Update Up"/>

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