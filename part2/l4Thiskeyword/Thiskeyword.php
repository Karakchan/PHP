<?php

// echo "hey";


//class object
class Thiskeyword{

    public $companyname = "Data Land Technology"; //can access from everywhere
    private  $jobtitle = "Manager";  //can't access from outsid
    protected $location = "Yangon"; //can't access frome outside

   
    public function getinfo(){

        $num = 10;
        echo $num;

        echo $this->companyname;
        echo $this->jobtitle;
        echo $this->location;
    }   

    public function getcompanyname(){
       echo  $this->companyname; // Data land Technology
       echo "<br/>";

       $this->companyname = "ABC Co.,ltd";
       echo $this->companyname; //ABC Co.,ltd
    }



}

class Vehicle{
    public $brand = "Toyota";

    public function getbrandname(){
        return $this->brand;
    }

    public function setbrandname($name){
        $this->brand = $name;
    }
}

echo "this is Thiskeyword Modifier <br/>";

$obj = new Thiskeyword();

echo $obj->companyname ."<br/>"; //Data land Technology

$obj->getinfo(); 

echo "<br/>";

// echo $obj->getcompanyname(); //Data land Technology //BC Co.,ltd
// echo $obj->companyname;  /Data land Technology

echo "<hr/>";

$obj2 = new Vehicle();

echo $obj2->brand; //Toyota
echo $obj2->getbrandname(); //Toyota
echo $obj2->setbrandname("Suzuki"); //Suzuki

echo "<hr/>";

?>