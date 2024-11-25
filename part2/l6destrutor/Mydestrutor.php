<?php

//class object
class Mydestrutor{

    public $num1 = 100;
    private $num2 = 200;
    protected $num3 = 300;

    public $message = "Total result is ";
    
   

    // magic method
    public function __construct(){
        $result = $this->num1+$this->num2+$this->num3;
        echo " $this->message = $result <br/>";
    }

    //member method
    public function car($brand){
        echo "I brought a new {$brand} car";
    }

      //magic method 
      //Note :: Destructor can't set perameter
      public function __destruct(){
        echo "I am start working by automatically afer all above, hee hee :P";
    }
   

   


}

echo "This is My destrutor <br/>";

$obj = new Mydestrutor();

echo "<hr/>";

$obj->car("Toyota");

echo "<hr/>";
?>