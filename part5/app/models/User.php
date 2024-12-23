<?php

// require_once '../libraries/SystemDatabase.php';

class User{

    private $db;

    public function __construct(){
        
        $this->db = new SystemDatabase();
    }

    public function register($data){
        $this->db->dbquery("INSERT INTO users(name,email,password) VALUE (:name,:email,:password)");

        $this->db->dbbind(":name",$data['fullname']);
        $this->db->dbbind(":email",$data['email']);
        $this->db->dbbind(":password",$data['password']);

        if($this->db->dbexecute()){
            return true;
        }else{
            return false;
        }
    }

    public function registeremailcheck($email){

    }

    public function login($email,$password){

        $this->db->dbquery("SELECT * FROM users WHERE email=:email");
        $this->db->dbbind(":email",$email);

        $row = $this->db->getsingledataassoc();

        $hashedpassword = $row['pasword'];

        if(password_verify($password)){
            return $row;
        }else{
            return false;
        }


    }

}

// new Article();

?>