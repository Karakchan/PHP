<?php

// Note :: final keyword is used for restrict method and class not to be share with child class.

class Myfinalkeyword{
    public $fullname = "Aung kyaw kyaw";
    public $city = "Mandalay";
    public $email = "aungkyawkyaw@gmail.com";
    public $password = "98765";

    public function getaccess(){
        echo "This is site Login : email is $this->email & password is $this->password . <br/>";
    }
    final public function getinfo(){
        echo "Name is $this->fullname & city is $this->city . <br/>";
    }
}

class Developerlogin extends Myfinalkeyword{
    public function gitlablogin(){
        echo "This is a gitlab login : email is $this->email .Profile is $this->fullname . <br/>";
    }

    // public function getinfo(){
    //     echo "My fullname is $this->fullname & Current city is $this->city . <br/>";
    // }

}

echo "This is my finalkeyword";
echo "<br/>";

$obj1 = new Myfinalkeyword();
echo "$obj1->fullname <br/>";
$obj1->getaccess();
$obj1->getinfo();

echo "<hr/>";

$obj2 = new Developerlogin();
echo "$obj2->fullname <br/>";
$obj2->getaccess();
$obj2->getinfo();

echo "<hr/>";


?>