<?php

// echo "hey";


//class object
class Myaccessmodifier{

 // Access Modifier
    // public = anyone can access
    // private = only access inside main class
    // protected = subclass / Extended class
   
    public $companyname = "Data Land Technology";
    var $personname = "Mr.tin";

    private $jobtitle = "Manager"; //can't print from outside
    protected $location = "Yangon"; // cant't print from outside


    public function getinfo(){
        $num = 10;
        echo $num;

        // echo $companyname;  //can't print
        // echo $personname;   //can't echo

        // echo $jobtitle;  //can't print
        // echo $location;  // can't print
    }   



}

echo "this is Access Modifier <br/>";

$obj = new Myaccessmodifier();

echo $obj->companyname . "<br/>";  // Data Land Technology
echo $obj->personname . "<br/>";  // Mr.Tin

$obj->getinfo();  //10
echo "<hr/>";

$obj->companyname = "ABC Co.,Ltd";
echo $obj->companyname . "<br/>"; //ABC Co.,Ltd

$obj->personname = "Ko Tha";
echo $obj->personname . "<br/>"; //Ko Tha

echo "<hr/>";


echo $jobtitle;  //can't print
echo $location;  // can't print






?>