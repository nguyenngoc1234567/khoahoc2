<?php
// $numbers = [5,8,9,6,2,5,7,6,7,1,7,3,4];
// $find = 7;
// $count = 0;
// foreach ($numbers as $key => $value){
//     if($value == $find){
//         $count++;
//     }
// }
// echo 'Tìm thấy số '.$find.' xuất hiện '.$count.' lần ' ;

   $numbers =[1,2,3,4,5,6,7,8,9,4,5,6,5,1,];
   $find = 2;
   $count = 0;
foreach($numbers as $key => $value){
    if($value==$find){
        $count++;
    }
}
echo 'tìm thấy số '.$find.'xuất hiện'. $count.'lần';


