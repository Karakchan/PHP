<?php



class ArticlesController extends SystemController{
   
    private $mainmodal;

    public function __construct(){
        $this->mainmodal = $this->model('Article');

        if(!authcheck()){
            redirect('user/login');
        }else{
            $this->mainmodal = $this->model('Article');
        }
    }

    public function index(){

       $articles = $this->mainmodal->getarticles();
    $datas = [
            'articles'=>$articles
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


?>