<?php


class Staticvsnonstatic{

    // Member Variables
    // Non-static property 
    public $fullname = "Honey Nway Oo";
    //Static Property
    public static $city = "Yangon";
    //Constant
    const GENDER = "Female";

    //Member Methods
    //Non-static method can call staitc property and Non-static property.
    //Non-static method can call static method and Non-static method.



    //static method can not call Non-static property but Constant can call
    //static method can not call Non-static method



    // Non-static Methods
    public function getname(){
        echo "I am Non-static method <br/>";

        echo "Name is $this->fullname <br/>";
    }

    public function getcity(){
        echo "I am Non-static method <br/>";

        echo "City is" . self::$city ."<br/>";
    }

    public function getgender(){
        echo "I am Non-static method <br/>";

        echo "Gender is" . self::GENDER ."<br/>";
    }

    //Static Method
    public static function getstaticcity(){
        echo "I am static method <br/>";

        echo "City is" . self::$city ." & hometown is ". static::$city ."<br/>";
    }

    public static function getstaticgender(){
        echo "I am static method <br/>";

        echo "Gender is" . self::GENDER ."& hometown is ". static::GENDER ."<br/>";

    }

    public function car(){
        echo "I am Non-static method <br/>";

        $brand = self::carbrand();
        echo "I brought a new brand ${brand} car. <br/>";
    }

    public static function carbrand(){
        return "TOYOTA LEXUS LX570";
    }

    public function mobilebrand(){
        return "iphone 16 pro max <br/>";
    }

    public function beforebuy(){
        echo "I am Non-static method <br/>";

        $brand = $this->mobilebrand();
        echo "I am thinking about to by a new ${brand}. <br/>";
    }







}

echo "This is My Staticvsnonstatic";

$obj = new Staticvsnonstatic();
echo $obj->fullname;  //Honey Nway Oo
echo "<br/>";

echo $obj::$city; //Yangon
echo "<br/>";
echo Staticvsnonstatic::$city; //Yangon


echo $obj::GENDER; //Female
echo "<br/>";
echo Staticvsnonstatic::GENDER; //Female

echo "<hr/>";
echo "<hr/>";


//Non-static Method 
$obj->getname();
$obj->getcity(); //I am Non-static method City isYangon
$obj->getgender(); //Gender isFemale



//Static Method
$obj::getstaticcity(); //City isYangon & hometown is Yangon
$obj::getstaticgender(); //Gender isFemale& hometown is Female

Staticvsnonstatic::getstaticcity(); //City isYangon & hometown is Yangon
Staticvsnonstatic::getstaticgender(); //Gender isFemale& hometown is Female

echo "<hr/>";

$obj->car();

$obj->beforebuy();






echo "<hr/>";




?>