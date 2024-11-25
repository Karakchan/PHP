
<?php

// phpinfo(); 

ini_set('display_errors',1);

if(isset($_POST['submit'])){
    $uploaddir = 'assets/';
    $filenames = $_FILES['profile']['name'];
    $filetmps = $_FILES['profile']['tmp_name'];
    $fileerrs = $_FILES['profile']['error'];

    foreach($fileerrs as $idx=>$fileerr){

        // mean there are no errors (UPLOAD_ERR_OK)
        if($fileerr === UPLOAD_ERR_OK){
            $getfilename = $filenames[$idx];
            $uploadfile = $uploaddir.basename($getfilename);
            $getfiletmp = $filetmps[$idx];

                if(move_uploaded_file($getfiletmp,$uploadfile)){
                    echo "Files Successfully Uploaded";
                }else{
                    echo "Upload Failed";
                }
        }
    }

}

?>



<!-- //sudo chmod 777 -R assets/ -->


<!DOCTYPE html>
    <html>
        <head>
            <title>Multi Upload File</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        </head>
        <body>

            <div class="col-md-6 mx-auto mt-5"> 
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group mb-3">
                        <label for="profile">Profile Picture</label>
                        <input type="file" name="profile[]" id="profile1" class="form-control" multiple/>
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