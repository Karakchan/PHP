<?php

// require_once "../libraries/SystemController.php";


class UsersController extends SystemController{
   
    private $mainmodal;

    public function __construct(){
        // echo "I am ArticlesController";
        $this->mainmodal = $this->model('User');
    }

    public function register(){

      if($_SERVER['REQUEST_METHOD'] === 'POST'){


            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $datas = [
                "fullname"=>textfilter($_POST['fullname'] ?? ''),
                "email"=>textfilter($_POST['email'] ?? ''),
                "password"=>textfilter($_POST['password'] ?? ''),
                "cfmpassword"=>textfilter($_POST['cfmpassword'] ?? ''),
                "fullnameerr"=>"",
                "emailerr"=>"",
                "passworderr"=>"",
                "cfmpassworderr"=>"",
            ];

            //validate full name
            if(empty($datas['fullanme'])){
                $datas["fullnameerr"] = "Please enter full name";
            }

             //validate email
            if(empty($datas['email'])){
                $datas["emailerr"] = "Please enter email";
            }elseif(!filter_var($datas['email'],FILTER_VALIDATE_EMAIL)){
                $datas["emailerr"] = "Please enter a valid email address";
            }else{
                //check email already exists or not
                if($this->usermodel->checkuniqueemail($datas['email'])){
                    $datas['emailerr'] = "This email already registered";
                }
            }

             //validate password
            if(empty($datas['password'])){
                $datas["passworderr"] = "Please enter password";
            }elseif(strlen($datas['password']) < 5){
                $datas["passworderr"] = "Please must be at least 5 characters.";
            }

             //validate confirmpassword
             if(empty($datas['cnfpassword'])){
                $datas["cfmpassworderr"] = "Please confirm your password";
            }elseif($datas['cfmpassword'] !== $datas['password']){
                $datas["cfmpassworderr"] = "Please do not match.";
            }

            if(
                empty($datas['fullnameerr']) &&
                empty($datas['emailerr']) &&
                empty($datas['passworderr']) &&
                empty($datas['cnfpassworderr']) 
            ){

                //hash the password
                $datas["password"] = password_hash($datas["password"],PASSWORD_DEFAULT);

                //register the user
                if($this->usermodel->register($datas)){
                    flash("register_success"," You have successfully registered!");
                    redirect("users/login");
                }else{
                    die("Something went wrong while registering.");
                }

            }else{
                // errror sending
                return $this->view('users/register',$datas);
            }

        }else{

            $datas = [
                "fullname"=>"",
                "email"=>"",
                "password"=>"",
                "cfmpassword"=>"",
                "fullnameerr"=>"",
                "emailerr"=>"",
                "passworderr"=>"",
                "cfmpassworderr"=>"",
            ];
        }

     return $this->view('users/register'.$datas);
    }

    public function login(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){


            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $datas = [
                "email"=>textfilter($_POST['email'] ?? ''),
                "password"=>textfilter($_POST['password'] ?? ''),
                "emailerr"=>"",
                "passworderr"=>""
            ];

           

             //validate email
            if(empty($datas['email'])){
                $datas["emailerr"] = "Please enter email";
            }elseif(!filter_var($datas['email'],FILTER_VALIDATE_EMAIL)){
                $datas["emailerr"] = "Please enter a valid email address";
            }elseif($this->usermodel->checkuniqueemail($datas['email'])){
                //check email already exists or not
                    $datas['emailerr'] = "No user found with this email";
            }

             //validate password
            if(empty($datas['password'])){
                $datas["passworderr"] = "Please enter password";
            }

            if(empty($datas['emailerr']) && empty($datas['passworderr'])){

               $login = $this->usermodel->login($datas['email'],$datas['password']);

               if($loginuser){
                // successful login
                $this->createusersession($loginuser);
               }else{   
                //invalid credentials
                $datas['passworderr'] = "Password Incorrect.";
                return $this->view("users/login",$datas);
               }

            }else{
                // errror sending
                return $this->view('users/login',$datas);
            }

        }else{

            $datas = [
                "email"=>"",
                "password"=>"",
                "emailerr"=>"",
                "passworderr"=>""
            ];
        }

     return $this->view('users/login'.$datas);
        
    }

    public function logout(){
        unset($_SESSION['user_id']);
        unset($_SESSION['username']);
        unset($_SESSION['useremail']);

        session_destroy();

        redirect('users/login');
    }


    public function createusersession($user){
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['userfullname'] = $user['fullname'];
        $_SESSION['email'] = $user['email'];

        redirect("welcomes/index");

    }
    
}

?>