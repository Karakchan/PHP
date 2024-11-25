<?php





































                // d- m y
$date1 = date_create("10-01-2023");
$date2 = date_create('20-05-2024');

// echo date_format($date1,"Y/m/d"); //2023/01/10
// echo date_format($date2,"Y-m-d"); //2024-04-01



$diffone = date_diff($date2,$date1);
echo $diffone->format('%d days'); //10 days
echo $diffone->format('%m months'); //4 months
echo $diffone->format("%y year"); // 0 year
echo $diffone->format("%Y year"); // 00 year

                    // d-m-y
$date3 = "{$getdate['mday']}-{$getdate['mon']}-{$getdate['year']}";
echo $date3; // 10-6-2024
$date4 = date_create($date3);
echo date_format($date4,"Y-m-d"); //2024-06-10


$difftwo = date_diff($date4,$date2);
echo $difftwo->format("%d days"); //10days
echo $difftwo->format('%m months'); //1 months
echo $difftwo->format("%y year"); //0 year
echo $difftwo->format('%Y year'); //00 year


echo  $difftwo->format("%R%d days"); // 
echo $difftwo->format("%R%a days");  //


?>
