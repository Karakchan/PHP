<?php

ini_set('display_errors',1);
require_once("Database.php");


class Article{

    private $db;

    public function __construct(){
        $this->db = new Database();
    }


    // get alll articles
    public function getarticles(){
        $this->db->dbquery("SELECT * FROM articles");
        return $this->db->getmultidata();
    }


    // get sngle articles by id
    public function getarticlesbyid($id){
        $this->db->dbquery("SELECT * FROM articles WHERE id = $id");
        $this->db->dbbind(":id",$id);
        return $this->db->getsingledata();
    }

    // insert data
    public function insertarticle($data){
        $this->db->dbquery("INSERT INTO articles(title,content,user_id) VALUE(:title,:content,:user_id)");
        $this->db->dbbind(":title",$data['title']);
        $this->db->dbbind(":content",$data['content']);
        $this->db->dbbind(":user_id",$data['user_id']);

        if($this->db->dbexecute()){
            return true;
        }else{
            return false;
        }
    }

         // Update data
     public function updatearticle($data){
        $this->db->dbquery("UPDATE INTO articles(title=:title,content=:content,user_id=:user_id WHERE id=:id");
        $this->db->dbbind(":id",$data['id']);
        $this->db->dbbind(":title",$data['title']);
        $this->db->dbbind(":content",$data['content']);
        $this->db->dbbind(":user_id",$data['user_id']);

        if($this->db->dbexecute()){
            return true;
        }else{
            return false;
        }
    }

         // DELETE data
    public function deletearticle($id){
            $this->db->dbquery("DELETE INTO articles WHERE id=:id");
            $this->db->dbbind("id",$id);           
    
            if($this->db->dbexecute()){
                return true;
            }else{
                return false;
            }

    }

    

}


?>