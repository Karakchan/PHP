<?php

//file_get_content()    = read
//file_put_contents()   =write
// file_exists()        = check file exists or not
//copy()                =  copies a files
//rename()              = rename a file
//unlink()              = delete a file

echo file_get_contents('l28file.txt');

echo "<hr/>";



$existingfile = 'l28file.txt';
$namefile = "l28softfile.txt";
$message = file_get_contents($existingfile);

$message .= "\n Thanks for using php file systme. \n";

file_put_contents($namefile,$message) or die("Unable to open file");

$existingfile = 'l28file.txt';
$namefile = "l28headfile.txt";

if(file_exists($existingfile)){
    echo "File Exists";

    $message = file_get_contents($existingfile);
    $message .= "\n Thanks for using php file systme. \n";
    file_put_contents($namefile,$message) or die("Unable to open file");
}else{
    echo "File NOT Fount";
}

echo "<hr/>";


$existingfile = 'l28file.txt';
$namefile = "l28mainfile.txt";

if(is_file($existingfile)){
    echo "File Exists";

    $message = file_get_contents($existingfile);
    $message .= "\n Thanks for using php file systme. \n";
    file_put_contents($namefile,$message) or die("Unable to open file");
}else{
    echo "File NOT Fount";
}

echo "<hr/>";

// =>Copy(main file,copy file)

$fileopen = 'l28file.txt';
copy($existingfile,"l28subfile.txt");

echo file_get_contents("l28subfile.txt");

echo "<hr/>";

// // =>Rename(name file,newfilename)
// $existingfile = "l28subfile.txt";
// rename($existingfile,'l28webfile.txt');

// echo file_get_contents("l28webfile.txt");

// echo "<hr/>";


// =>Unlink(main)
$existingfile = "l28webfile.txt";

if(file_exists($existingfile)){
    unlink($existingfile);
    echo "file Delete Success";
}else{
    echo "file Not Fount";

}


$url = "https://www.google.com";
fopen($url,"r") or exit("Can't Connect");

// =>show all txt files
echo "<pre>".print_r(glob("*.txt"),true)."</pre>";

echo "<hr/>";

// =>show all  files
echo "<pre>".print_r(glob("*.*"),true)."</pre>";

echo "<hr/>";

?>