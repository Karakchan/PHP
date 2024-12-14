<?php

// require_once "../libraries/SystemController.php";


class ArticlesController extends SystemController{
   
    private $mainmodal;

    public function __construct(){
        echo "I am ArticlesController";
        $this->mainmodal = $this->model('Article');
    }

    public function index(){
        // echo "I am Article Index Page";

        // return $this->view('articles/index');

    //    return $this->view('articles/index'.["greeting"=>"Hello Sir!"]);

    //    $datas = [
    //         "greeting"=>"Have a day Sir"
    //    ];

    //    return $this->view('articles/index'.$datas());

    //    $articles = $this->mainmodal->getarticles();
    $datas = [
            "greeting"=>"Have a day Sir",
            // 'articles'=>$articles
    ];
    return $this->view('articles/index'.$datas);

 
    }

    public function create(){
        
    }

    public function show($id){
        echo "I am Article show page = ID is $id <br/>";
    }

    public function edit($id){
        echo "I am Article edit page = ID is $id <br/>";

    }

    public function update($id){
        echo "I am Article update page = ID is $id <br/>";

    }

    public function destory($id){
        echo "I am Article destory page = ID is $id <br/>";
    }


    
}

// new ArticlesController();

echo "<hr/>";



?>