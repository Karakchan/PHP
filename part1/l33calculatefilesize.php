<?php


ini_set("display_errors",1);

// function getfilesizemethod1($filesize){
//     // return $filesize;

//     if(is_numeric($filesize)){

//         $fixnum = 1024;
//         $idx = 0;
//         $prefix = ["B","KB","MB","GB","TB","PB","EB","ZB","YB"];

//         while(($filesize/$fixnum) > 0.9){
//             $filesize = $filesize/$fixnum;
//             $idx++;
//         }

//         return round($filesize,2).' '.$prefix[$idx];

//     }else{
//         echo "NaN";
//     }
// }


// echo getfilesizemethod1(30000); //bit t0 29kb



// function getfilesizemethod2($filesize){

//     if(is_numeric($filesize)){
//         $fixnum = 1024;
//         $idx = 0;
//         $prefix = ["B","KB","MB","GB","TB","PB","EB","ZB","YB"];

//         if($filesize < $fixnum){
//             return $filesize. ''. $prefix[$idx];
//         }else{

//             while($filesize > $fixnum){
//                   $filesize = round($filesize/$fixnum,2);
//                    $idx++;
//                  }
//                  return $filesize. ' '. $prefix[$idx];
                 
//                 }
//         }else{
//             return "NaN";
//         }
//     }

//     echo getfilesizemethod2(20000); //bit t0 19kb


function getfilesizemethod3($filesize){

    $size = filesize($filesize);

    $fixnum = 1024;
    $prefix = ["B","KB","MB","GB","TB","PB","EB","ZB","YB"];

    $power = $size > 0 ? floor(log($size,$fixnum)) : 0;

    $result = round($size/pow($fixnum,$power),2).''.$prefix[$power];

    return $result;
    }

    echo getfilesizemethod3("./l7array.php"); // 2.04kb





?>