<?php

// require_once '../config/config.php';

class SystemDatabase{

    private $dbhost = DB_HOST;
    private $dbuser = DB_USER;
    private $dbpass = DB_PASS;
    private $dbname = DB_NAME;

    private $conn;
    private $error;
    private $stmt;
    private $dbconnected = false;


    public function __construct(){
        echo " I am System Database";

        // Set DSN (Data Source Name)
        $option = [
            PDO::ATTR_PERSISTENT=>true,
            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
        ];

        try{
            $this->conn = new PDO("mysql:host=$this->dbhost;dbname=$this->dbname",$this->dbuser,$this->dbpass,$option);
            $this->dbconnected = true;
        }catch(PDOException $e){
            $this->error= $e->getMessage();
        }

    }

    // get PDO error 
    public function geterror(){
        return $this->error;
    }

    //check database connected
    public function isconnected(){
        return $this->dbconnected;
    }

    //prepare with query
    public function dbquery($query){
        $this->stmt = $this->conn->prepare($query);
    }

    public function dbbind($param,$value,$type=null){
        if(is_null($type)){
            switch(true){
                case is_string($value):
                    $type = PDO::PARAM_STR;
                    break;
                case int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
            }
        }

        // $this->stmt->bindParam($param,$value,$type); 
        $this->stmt->bindValue($param,$value,$type);


    }

    // execute after prepare 
    public function dbexecute(){
        return $this->stmt->execute();
    }


    // get all results , as array object 
    public function getmultidataassoc(){
        $this->dbexecute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getmultidataobj(){
        $this->dbexecute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // get single results , as associate array 
    public function getsingledataassoc(){
        $this->dbexecute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getsingledataobj(){
        $this->dbexecute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    // get database row count 
    public function dbrowcount(){
        return $this->stmt->rowCount();
    }
}


// $obj = new SystemDatabase();

?>

