<?php

// echo "I am articles/index from view";

?>

<!DOCTYPE html>
<html>
    <head>
        <title>echo APPNAME</title>
    </head>
    <body>
        <h1>Article Index</h1>
        <p><?php echo APPNAME; ?></p>
        <p><?php echo ROOTURL; ?></p>
        <p><?php echo APPURL; ?></p>

        <p><?php echo $datas['greeting']; ?></p>
        <h3><?php echo $datas['caption']; ?></h3>

        <ul>
            <?php foreach($datas['articles'] as $article) : ?>
                <li><?php echo $article->title; ?></li>
                <li><?php echo "$article->content"; ?></li>
            <?php endforeach; ?>
        </ul>

    
    </body>
</html>