<?php

class Bankbalance{

    public $accnum;
    public $name;
    public $balance = 0;

    public function depositamount($amount){
        $this->balance = $this->balance + $amount;
    }

    public function checkbalance(){
        echo "Your Balance is = $this->balance ";
    }

    public function deductamount($amount){

        if($this->balance <= 0){
            echo "No Balance, You do not have any money.";
        }

        if($this->balance < $amount){
            echo "Insufficeint!! You are trying to withdraw than your main balance";
        }

        $this->balance = $this->balance - $amount;
    }

}

$bankobj1 = new Bankbalance();
$bankobj1->accnum = 1000;
$bankobj1->name = "aung aung";
$bankobj1->balance = 200000;

$bankobj1->checkbalance(); //200000
$bankobj1->depositamount(300000); //500000
echo "<br/>";
$bankobj1->checkbalance();//500000

echo "<hr/>";


$bankobj2 = new Bankbalance();
$bankobj2->accnum = 1001;
$bankobj2->name = "YU Yu";
$bankobj2->balance = 300000;

$bankobj2->checkbalance(); //300000
$bankobj2->depositamount(200000); //500000
echo "<br/>";
$bankobj2->checkbalance();//500000
echo "<br/>";
$bankobj2->deductamount(400000); 
$bankobj2->checkbalance();//100000
echo "<br/>";
$bankobj2->deductamount(200000); 
$bankobj2->checkbalance();//-100000




?>