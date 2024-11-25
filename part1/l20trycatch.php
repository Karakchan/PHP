<?php

function mycolor($color){
    
    if($color !== "red"){

        // Exception(message)
        throw new Exception ("I hate $color color");
    }


    return "Yeah!! My fav color is $color";
}

echo mycolor("red");


function mynum($base,$power){

    if($power > 3){
        throw new Exception ("We are not allow over $power");
    }
    $result = pow($base,$power);
    return $result;
}

echo mynum(2,3);


// => try..catch Statement


// try{
//     code to be executed
// }catch(Expection $e){
//     code to exception is catched
// }finally{
//     code taht always runs regardless of weather an exception was catch or not !
// }

// echo mycolour("black")



try{
    echo mycolour("black");
}catch(Exception $e){
    echo "You should not try with this color.";
}

try{
    echo mycolour("black");
}catch(Exception $e){
    echo $e->getMessage(); 
}

try{
    echo mycolour("red");
}catch(Exception $e){
    echo $e->getMessage(); 
}

function mypower($base,$power){

    if($power > 5){
        throw new Exception ("We are not allow over $power");
    }
    $result = pow($base,$power);
    return $result;
}


//echo mypower(2,6)

try{
    echo mypower(2,6);
}catch(Exception $e){
    echo "You should not over.". $e->getMessage();
}

try{
    echo mypower(2,5);
}catch(Exception $e){
    echo "you should not over.". $e->getMessage();
}


function mycalculate($base,$power){

    if($power > 3){
        throw new Exception ("We are not allow over $power");
    }
    $result = pow($base,$power);
    return $result;
}

//echo mycalculate(2,4);

try{
    echo mycalculate(2,4);
}catch(Exception $e){
    echo "You should not over .". $e->getMessage();
}finally{
    echo "<br>";
    echo "Hay there!! I am joker";
}

try{
    echo mycalculate(2,2);
}catch(Exception $e){
    echo "You should not over .". $e->getMessage();
}finally{
    echo "<br>";
    echo "Hay there!! I am joker";
}

















?>