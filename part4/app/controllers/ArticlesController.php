<?php

require_once "../libraries/SystemController.php";


class ArticlesController extends SystemController{
   
    private $mainmodal;

    public function __construct(){
        echo "I am ArticlesController";
        $this->mainmodal = $this->model('Article');
    }

    public function index(){
        echo "I am Article Index Page";

        // return $this->view('articles/index');
    }

    public function create(){
        
    }

    public function show(){
        
    }

    public function edit(){
        
    }

    public function update(){
        
    }

    public function destory(){
        
    }


    
}

new ArticlesController();

echo "<hr/>";



?>