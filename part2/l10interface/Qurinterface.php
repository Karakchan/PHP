<?php

interface Role{
    public function setid($id);
    public function createrole();
    public function readrole($id);
    public function updaterole($id,$request);
    public function deleterole();
}
class Qurinterface implements Role{

    public $id;
    public $request;

    public function setid($id){
        $this->id;

    }

    public function createrole(){
        echo "i am from read role .<br/>";
    }

    public function readrole($id){
        $this->id = $id;
        echo "i am from read role and i have to read record id = {$this->id} <br/>";
    }

    public function updaterole($id,$request){
        echo "i am from read role and i have to update record id = {$id}. And my request data is =  {$request}<br/>";

    }

    public function deleterole(){
        echo "i am from delete role and i have to delete record id = {$this->id} <br/>";
    }


}

echo "This is My Qurinterface";

$obj= new Qurinterface();
$obj->setid(500); 
$obj->createrole(10); // i am from read role
$obj->readrole(10); // i am from read role and i have to read record id = 10
$obj->updaterole(10,"aung aung"); //i am from read role and i have to update record id = 10. And my request data is = aung aung
$obj->deleterole(); //i am from delete role and i have to delete record id =



echo "<hr/>";




?>