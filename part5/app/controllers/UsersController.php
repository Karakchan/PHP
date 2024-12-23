<?php

// require_once "../libraries/SystemController.php";


class UsersController extends SystemController{
   
    private $mainmodal;

    public function __construct(){
        // echo "I am ArticlesController";
        $this->mainmodal = $this->model('User');
    }

    public function register(){

         $datas = [
            "greeting"=>"I am register Page",
            
        ];

     return $this->view('users/register'.$datas);


    }

    public function login(){

        $datas = [
            "greeting"=>"I am login Page",
            
        ];

     return $this->view('users/register'.$datas);

        
    }

    public function logout(){
        unset($_SESSION['user_id']);
        unset($_SESSION['username']);
        unset($_SESSION['useremail']);

        session_destroy();

        redirect('users/login');
    }

    
}

?>