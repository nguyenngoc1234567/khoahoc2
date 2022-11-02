<?php
// $numbers = [5,8,9,6,2,5,1,3,4];
// $find = 5;
// $count = 0;
// foreach ($numbers as $key => $value){
//     if($value == $find){
//         $count++;
//     }
// }
// echo 'Tìm thấy số '.$find.' xuất hiện '.$count.' lần ' ;

  
//  $numbers = [1,2,3,4,5,6,7,8,8,7];
//  $find = 7;
//  $count = 0 ;
//  foreach($numbers as $key =>$value){
//     if($value==$find){
//         $count++;
//     }
//  }
//  echo 'tim'.$find.'xuat hien'.$count.'lan';


//  $numbers = [1,2,3,4,5,6,7,8,9];
//  $find = 7;
//  foreach($numbers as $key =>$value){
//     if($value==$find){
//        echo $key ;
//     }
// }
$find = 23 ;
$numbers = [2,5,8,12,16,23,38,56,72,91];
$l = 0;
$r = count($numbers) -1;
while ($l<=$r) {
    $m=floor(($l+$r)/2);
    if($numbers[$m]<$find){
        $l = $m+1;
    } elseif($numbers[$m]>$find){
        $r = $m-1 ;
    }else {
        echo $m ;
        break ; 
    }
   
}

