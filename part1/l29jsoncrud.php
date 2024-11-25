<?php

$getdatas = file_get_contents('l29studentdb.json');
// echo $getdatas;
$datasde = json_decode($getdatas,true);  //array
// echo "<pre>".print_r($datasde,true)."</pre>;


// =>READ

// foreach($datasde as $datas){
//     // echo "<pre>".print_r($datasde,true)."</pre>;

//     foreach($datas as $key=>$data){
//         echo $key .' = '. $data . "<br/>";
//     }
//     echo "<hr/>";
// }

// => Create

// $newdatas = [
//     [
//         "id"=>8,
//         "name"=>"Lin Lin",
//         "city"=>"yangon"
//     ],
//     [
//         "id"=>9,
//         "name"=>"Naw Nae",
//         "city"=>"yangon"
//     ],
//     [
//         "id"=>10,
//         "name"=>"Yai Lin",
//         "city"=>"yangon"
//     ]
//  ];
// // sudo chmod 777 -R l29studentdb.json

// foreach($newdatas as $newdatas){
//     array_push($datasde,$newdatas);
//     file_put_contents('./l29studentdb.json',json_encode($datasde));
// }


// update

// foreach($datasde as $datasde){
//     // echo $datasde;
//     // echo "<pre>".print_r($datas,true)."</pre>";

//     // echo $key;

//     // echo "<pre>".print_r($datasde[$key],true)."</pre>";
//     // echo $datas['id']; //1 to 10

//     if($datas['id'] === 9){
//         // id number 9 = index number 8
//         // $datasde[$key]['name'] = "chit hsu wai';

//         $datasde[8]['name'] = "sander";
//     }
// }

//do save
//  file_put_contents('./l29studentdb.json',json_encode($datasde));


// => Delete 

$idxs = [];


//select index to delete
foreach($datasde as $key=>$dtas){
    if($datas['id'] === 7){
        $idxs = $key; //index number 6
    }
}


//detele value from array
foreach($idxs as $idx){
    unset($datasde[$idx]);
}


//do save
file_put_contents('./l29studentdb.json',json_decode($datas));


























?>


<!--  {
        "id":1,
        "name":"su su",
        "city":"Mandalay"
    },
    {
        "id":2,
        "name":" nu nu",
        "city":"Mandalay"
    },
    {
        "id":3,
        "name":"yu yu",
        "city":"Mandalay"
    },
    {
        "id":4,
        "name":"kyaw kyaw",
        "city":"Mandalay"
    },
    {
        "id":5,
        "name":"aung aung",
        "city":"Mandalay"
    },
    {
        "id":6,
        "name":"aung kyaw",
        "city":"Mandalay"
    },
    {
        "id":7,
        "name":"soe soe",
        "city":"Mandalay"
    } -->