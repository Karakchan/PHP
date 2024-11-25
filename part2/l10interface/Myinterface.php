<?php


//Note :: Interface can't include body
//Note :: Modifier must be public in Interface. cuz we need to overwrite
//Note :: To use an interface, a class must use to implements keyword.
//Note :: A class that implements an interface must implements all of the interface's methods.
//Note :: Can't contain properties / common methods but can contain constant variable

interface News{
    // public $fullname = "aung aung"; //error
    const CAPTION = "This is new article for sport";

    public function createpost();
    public function readpost($id);
    public function updatepost($id,$title);
    public function deletepost($id);


}

class MyInterface implements News{

   public function createpost(){
         echo "I am from create post.".self::CAPTION. "<br/>";
   }

   public function readpost($id){
         echo "I am from read post. & id is = {$id}". "<br/>";

   }

   public function updatepost($id,$title){
        echo "I am from Update post. & id is = {$id}. Title is {$title}". "<br/>";
   }

   public function deletepost($id){
    echo "I am from delete post. <br/>";
   }

   public function test(){
    echo "I am test";
   }
}

class Article implements News{

    public function createpost(){
        echo "I am from create article post.".self::CAPTION. "<br/>";
  }

  public function readpost($id){
        echo "I am from read article post. & id is = {$id}". "<br/>";

  }

  public function updatepost($id,$title){
       echo "I am from Update article post. & id is = {$id}. Title is {$title}". "<br/>";
  }

  public function deletepost($id){
   echo "I am from delete article post. <br/>";
  }

  public function test(){
   echo "I am test";
  }
}


echo "This is Interface <br/>";
echo "<hr/>";

$obj = new MyInterface();
$obj->createpost();
$obj->readpost(10);
$obj->updatepost(10,"This is new post 10");
$obj->test();

echo "<hr/>";

$obj2 = new Article();
$obj2->createpost();
$obj2->readpost(10);
$obj2->updatepost(10,"This is new article post 10");
$obj2->test();

echo "<hr/>";

















?>