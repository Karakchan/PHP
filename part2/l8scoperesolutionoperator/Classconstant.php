<?php


// Properties and Method Visiablity

// Visiablity           Availablity
// public               Anywhere: inside other classes and object instantnces        
// protected            Inside the current class and any subclasses
// private              Inside the current class only

class Classconstant{
    const NAME = "Honey Nway Oo";
    public const CITY = "Yangon";
    protected const EMAIL = "honeynwayoo@gmail.com";
    private const PASSWORD = "123456789";

    public function getinfo(){
        echo "Name is = " . self::NAME . "& She live in =". self::CITY."<br/>";
    }

    public function getaccess(){
        echo "Email is = " . self::EMAIL . "& Password is =". self::PASSWORD."<br/>";
    }
}

class Kit1 extends Classconstant{
    public function getcontent(){
        echo "Name is ".self::NAME. "& She Live in ".self::CITY."<br/>";
    }
}

class Kit2 extends Classconstant{
    public function getemail(){
        echo "Name is ".self::EMAIL. "& She Live in ".self::CITY."<br/>";
    }

    public function getpassword(){
        echo "Password is ".self::PASSWORD . "<br/>";
    }
}





echo "This is Class Constant <br/>";
$obj = new Classconstant();
echo $obj::NAME;
echo $obj::CITY;
// echo $obj::EMAIL . "<br/>"; //error cuz it's was protected
// echo $obj::PASSWORD . "<br/>"; //error cuz it's was private
$obj->getinfo(); //Honey Nway OoYangonName is = Honey Nway Oo& She live inYangon
$obj->getaccess(); //Email is = honeynwayoo@gmail.com& Password is123456789
echo "<hr/>";
echo "<hr/>";


$kk1 = new Kit1();
echo $kk1::NAME . "<br/>"; //Honey Nway OO
echo Kit1::CITY . "<br/>"; //Yangon
// echo $obj::EMAIL . "<br/>"; //error cuz it's was protected
// echo $obj::PASSWORD . "<br/>"; //error cuz it's was private
$obj->getinfo(); //Honey Nway OoYangonName is = Honey Nway Oo& She live inYangon
$obj->getaccess(); //Email is = honeynwayoo@gmail.com& Password is123456789

echo "<hr/>";

$kk2 = new Kit2();
echo $kk2::NAME . "<br/>"; //Honey Nway OO
echo Kit2::CITY . "<br/>"; //Yangon 

$kk2->getinfo(); //Honey Nway OoYangonName is = Honey Nway Oo& She live inYangon
$kk2->getaccess(); //Email is = honeynwayoo@gmail.com& Password is123456789

$kk2->getemail(); 
// $kk2->getpassword(); //get error cuz we call the private

echo "<hr/>";


?>