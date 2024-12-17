<?php

// require_once "../libraries/SystemController.php";


class WelcomesController extends SystemController{
   
    private $mainmodal;

    public function __construct(){
        $this->mainmodal = $this->model('Welcome');
    }

    public function index(){
       
    $datas = [
           "title"=>"Welcome Page"
        ];
    return $this->view('welcomes/index'.$datas);

 
    }


    public function about(){

        $datas = [
            "title"=>"about"
         ];
     return $this->view('welcomes/about'.$datas);
    }


    public function properties(){

    }

    public function services(){

    }

    public function customer(){


    }

    public function furniture(){
        

    }

    public function contact(){

    }


    
}

// new ArticlesController();

echo "<hr/>";



?>