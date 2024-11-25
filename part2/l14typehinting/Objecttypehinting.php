<?php


class Lady{

    public $name = "Honey Nway Oo";

    public function friend(){
        return "My friend name is $this->name <br/>";
    }

}

function showresult(Lady $val){
    echo $val->friend();
}

class Brand{
    public function getjpnbrand(){
        return "Toyota Brand <br/>";
    }

    public function getchnbrand(){
        return "BYD Brand <br/>";
    }
}

class Car{
    public function getbrand(Brand $val){
        return $val;
    }

    public function getjpn(Brand $val){
        return $val->getjpnbrand();
    }

    public function getchn(Brand $val){
        return $val->getchnbrand();
    }


}

echo "Thi is Object Type hinting <br/>";

// $obj1 = new Lady();
// showresult($obj1);

// showresult(new lady());

// echo "<hr/>"

$objbrand = new Brand();
$objcar = new Car();

echo $objcar->getbrand($objbrand)->getjpnbrand();
echo $objcar->getbrand($objbrand)->getchnbrand();

echo $objcar->getjpn($objbrand);
echo $objcar->getchn($objbrand);






?>