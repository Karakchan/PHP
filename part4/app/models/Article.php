<?php

// require_once '../libraries/SystemDatabase.php';

class Article{

    private $db;

    public function __construct(){
        // echo "i am article Model </br>";

        $this->db = new SystemDatabase();
    }

    public function getarticles(){
        $this->db->dbquery("SELECT * FROM articles");
        return $this->db->getmultidata();
    }
}

// new Article();

?>