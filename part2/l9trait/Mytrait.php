<?php

trait Sitelogin{
    public $fullname = "Honey Nway Oo";
    public $email = "honey@gmail.com";
    public $password = "123456";
    public function useraccess(){
        echo "This is site Login . Email is $this->email & Password is $this->password. <br/>";
    }

    public function userinfo(){
        echo " Profile is $this->fullname.<br/>";
    }
}

trait Devlogin {
    public function githublogin(){
        echo "This is Github Login . Email is $this->email & Password is $this->password. <br/>";
    }
}


class Googleauth {
    // Method 3
    use sitelogin,devlogin;

    public function gmaillogin(){
        echo "This is Github Login . Email is $this->email & Password is $this->password. <br/>";
    }
}

trait Mastertrait{
    use sitelogin,devlogin;
}


//class object
class Mytrait extends Googleauth{

    //Method 1
    use Sitelogin;
    use Devlogin;

    //Method 2
    use Sitelogin, Devlogin;
    
    //Method 4
    use Mastertrait;

}

echo "This is Mytrait <br/>";

$obj = new Mytrait();
$obj->gmaillogin(); //This is Gmail login . Email is aungaung@gmail.com & Profile name is aung aung
echo $obj->fullname; 
echo $obj->email;
echo $obj->password;
echo $obj->githublogin();

$ggo = new Googleauth;
// $ggo->gmaillogin();
echo "<hr/>";

















?>