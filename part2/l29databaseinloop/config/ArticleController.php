<?php

require_once("Article.php");

$article = new Article();

// =>Read
// echo "<pre>".print_r($article->getarticles(),true)."</pre>";
// var_dump($articles->getarticles());
// var_dump($articles->getarticles());
// var_dump($article->getarticlesbyid(1));

// => Insert 
    // $data = ["title"=>"this is new article 13","content"=>"Lorem Ipsum is simply dummy."];
    // $articleobj->insertarticle($data);
    // var_dump($articleobj->getarticles());

    // => Update 
    // $data = ["id"=>11,"title"=>"this is new article 6","content"=>"Lorem Ipsum is simply dummy."];
    // $articleobj->insertarticle($data);
    // var_dump($articleobj->getarticles());


    // => Delete
    // $articleobj->deletearticle(10);
    // var_dump($articleobj->getarticles());

?>