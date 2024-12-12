<?php

class SystemCore{

    protected $curcontroller = "ArticlesController";
    protected $curmethod = "index";
    protected $pamas = [];

    public function __construct(){
        echo "I am system core";

        $url = $this->getroute();
        echo "<pre>".print_r($url,true)."</pre>";

        // => Get Classname by first value
        $classurl = ucword($url[0]);
        echo "$classurl <br/>";

        if(file_exists('../app/controllers/'.$classurl."Controller.php")){
            echo "Controller Exists. <br/>";
            $this->curcontroller - $classurl."Controller.php";

            echo "<pre>".print_r($url,true)."</pre>";
            unset($url[0]); // unset index 0 after used for as classname
            echo "<pre>".print_r($url,true)."</pre>";

        }else{
            echo "Controller Doesn't Exists.<br/>";
        }
        
        echo $this->curcontroller;


            // => Require Controller
            require_once("../app/controllers/".$classurl."Controller.php");
            // => Instantiate Controller Class 
            $this->curcontroller = new $this->curcontroller;

        // => Get Classname by second value

        // => Get Classname by third value



    }

    public function getroute(){

        // echo "I am get route <br/>";

        // $url =  " I am get route ";
        // $url = $_GET['url'];  //articles/show/12/

        $url = isset($_GET['url']) ? rtrim($_GET['url'],"/") : ''; //articles/show/12
        
        //filter_var(string,filter) for remove charref as 
        $url = filter_var($url,FILTER_SANITIZE_URL);

        $url = explode('/',$url);
        
        return $url;
    }
}



?>
