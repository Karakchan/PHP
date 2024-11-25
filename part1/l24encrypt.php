<?php

function setpassword($plaintext){
    $passcode =  $plaintext;
    echo $passcode;
}

setpassword('password123')

function setpassworddef($plaintext){
    $passcode =  password_hash($plaintext,PASSWORD_DEFAULT); //dyn code
    echo strlen($passcode);
}

passworddef("password123"); //

function setpasswordbcr($plaintext){
    $passcode =  password_hash($plaintext,PASSWORD_BCRYPT); //DYN CODE
    echo "Before Encrypt = {$plaintext} , After Encrypt = {$passcode}";
    echo strlen($passcode);
}

passwordbcr('password123');

function passworddecry(){
    $plaintextone = "password123";
    $enccodeone = password_hash($plaintextone,PASSWORD_DEFAULT);

    $plaintexttwo = "password123";
    $enccodetwo = password_hash($plaintexttwo,PASSWORD_BCRYPT);

    $verify = password_verify($plaintextone,$enccodetwo);

    if($verify){
        echo "oki";
    }else{
        echo "failed";
    }
}

passworddecry();





?>