
<?php

// phpinfo(); 

ini_set('display_errors',1);

    if(isset($_POST['submit'])){
        // echo "hay";

        $result = $_POST['profile'];
        echo $result;  //error;


        $result = $_FILES;
        // echo $result;
        echo "<pre>" . print_r($result, true) . "</pre>";

        echo $_FILES['profile']['name'];  // This is correct, it outputs a string (file name)
        // echo $_FILES['profile']['full_path'] . "<br/>";
        // echo $_FILES['profile']['type'] . "<br/>";
        // echo $_FILES['profile']['tmp_name'] . "<br/>";
        // echo $_FILES['profile']['error'] . "<br/>";
        // echo $_FILES['profile']['size'] . "<br/>";

        // $fileext = explode('.', $_FILES['profile']['name'] );
        // echo "<pre>".print_r($fileext,true)."</pre>";
        // echo $fileext[0] . "<br/>";
        // echo $fileext[1] . "<br/>";


        // $filename = current(explode('.', $_FILES['profile']['name']));
        // // echo $filename . "<br/>";

        // $fileextension = end(explode('.', $_FILES['profile']['name']));
        // echo $fileextension . "<br/>";

    };




    // if(isset($_POST['submit'])){

    //     $uploaddir = "/var/www/html/phpbatch4/part1/assets/";
    //     // $uploadfile = $uploaddir . $_FILES['profile']['name']; 
    //     $uploadfile = $uploaddir . basename($_FILES['profile']['name']); 
    //     $uploadsize = $_FILES['profile']['size'];
    //     $uploadtype = strtolower(pathinfo($uploadfile,PATHINFO_EXTENSION));

    //     if($uploadtype !== 'jpg' && $uploadtype !== 'jpeg' && $uploadtype !== 'png' && $uploadtype !== 'gif'){
    //         echo "Sorry, we just allowed for JPG,JPEG,PNG & GIF file types";
    //     }else{

    //         // echo "Allowed File type";

    //         // if($uploadsize > 60000){
    //         //     echo "Sorry, Your File Size is too large";
    //         // }else{

    //         //     //move_uploaded_file(temp,actual path and name)
    //         // if(move_uploaded_file($_FILES['profile']['tmp_name'],$uploadfile)){
    //         //     echo "File Successfully Uploaded";
    //         // }else{
    //         //     echo "Try Again";
    //         // }

    //         // }

    //     }

        

      
    // };

    if(isset($_POST['submit'])){

        $uploaddir = "assets/";
        // $uploadfile = $uploaddir . $_FILES['profile']['name']; 
        $uploadfile = $uploaddir . basename($_FILES['profile']['name']); 
        $uploadsize = $_FILES['profile']['size'];
        $uploadtype = strtolower(pathinfo($uploadfile,PATHINFO_EXTENSION));
        $ready = true;
        $allowextension = ["jpg","jpeg","png","gif"];

    //check file already exists or not
    if(file_exists($uploadfile)){
        echo "Sorry, file arleady exists. <br/>";
        $ready = false;
    };

    //check file size
    if($uploadsize > 60000){
        $errors =  "Sorry , Your file is too large. <br/>";
        $ready = false;
    }
    //check file format
    if(in_array($uploadtype,$allowextension) === false){
          $errors[] = "Sorry, we just allowed for JPG,JPEG,PNG & GIF file types <br/>";
          $ready = false;
    }

    //file upload
    if($empty($errors)){

        if(move_uploaded_file($_FILES['profile']['tmp_name'],$uploadfile)){
             echo "File Successfully Uploaded";
         }else{
             echo "Try Again";
         }

    }else{
        echo "<pre>".print_r($errors,true)."</pre>";
    }

    };
};

?>



<!-- //sudo chmod 777 -R assets/ -->


<!DOCTYPE html>
    <html>
        <head>
            <title>Single Upload File</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        </head>
        <body>

            <div class="col-md-6 mx-auto mt-5">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="form-group mb-3">
                        <label for="profile">Profile Picture</label>
                        <input type="file" name="profile" id="profile" class="form-control"/>
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary rounded-0 float-end" value="Upload"/>
                </form>
            </div>





            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        </body>
    </html>



<!-- 
bit 
byte
kilo byte
mega byte 
giba byte 
tera byte 
peta byte 
exa byte 
zetta byte 
yotta byte 
-->


<!-- php.ini  -->
<!-- php.ini // upload_max_filesize = ?  -->

<!-- upload_max_filesize 256MB -->


<!-- byte to kb  -->
<!-- kilobytes = bytes /1024 -->
<!-- 2048/1024 = 2kb -->

<!-- kb to mb  -->
<!-- megabytes = kilo/ 1024 
3072/1024 = 3mb -->