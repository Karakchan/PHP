<?php

//Parent Class / Main class / superclass

//Note :: define() not working in class method

class Myinheritance{

    //properties / Member properties
     
    public $fullname = "Sandar";
    public $city = "Yangon";
    public $email = "sandar@gmail.com";
    public $password = "123456";

    //Method / Member Methods
    public function getaccess(){
        echo "This is site Login : email is $this->email & password is $this->password . <br/>";
    }
    public function getinfo(){
        echo "Name is $this->fullname & city is $this->city . <br/>";
    }
 

}

// Child Class
class Devlogin extends Myinheritance{

   //Method / Member Methods / Own Method

    public function githublogin(){
        echo "This is github Login : email is $this->email & Profile name is $this->fullname . <br/>";
    }
}

class Sociallogin extends Myinheritance{
    
    public function gmaillogin(){
        echo "This is gmail Login : email is $this->email & Profile name is $this->fullname . <br/>";
    }

    public function facebooklogin(){
        echo "This is facebook Login : email is $this->email & Profile name is $this->fullname . <br/>";
    }

    public function getinfo(){
        $this->fullname = "Hus Myat Yadanar Hlaing Wint Kyaw Tun";
        $this->city = "Bago";

        echo "Name is $this->fullname & city is $this->city . <br/>";
    }
}

echo "This is Inheritance <br/>";

$obj = new Myinheritance();
echo $obj->fullname . "<br/>";
$obj->getaccess();
$obj->getinfo();
echo "<hr/>";

$devobj = new Devlogin();
$devobj->githublogin();
echo "<hr/>";

$socobj = new Sociallogin;
$socobj->gmaillogin();
$socobj->facebooklogin();
$socobj->getinfo();
echo "<hr/>";

?>