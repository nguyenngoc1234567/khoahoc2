<?php

// function search(array $numbers, int $needle): bool
// {
//     $totalItems = count($numbers);

//     for ($i = 0; $i < $totalItems; $i++) {
//         if ($numbers[$i] === $needle) {
//             return true;
//         }
//     }
//     return false;
// }
// $numbers = range(1, 200, 5);

// if (search($numbers, 31)) {
//     echo "Found";
// } else {
//     echo "Not found";
// }

// $arr = [ 0,1,2,3,4,5,-2,6,7,8,9];
//      function searchNumber($numbers,$array){
//          for($i=0;$i<count($array);$i++){
//             if ($array[$i]==$numbers){
//                 return $i;
//             }

//          }
//          return -1;
//      }
//      $x=55;
//      if(searchNumber($x,$arr) != - 1){
//         echo "phan tu ".$x."co ton tai trong mang ";
//      }else{
//         echo "phan tu ".$x."khong ton tai trong mang ";
//      }



//      $find = 23 ;
// $numbers = [2,5,8,12,16,23,38,56,72,91];
// $l = 0;
// $r = count($numbers) -1;
// while ($l<=$r) {
//     $m=floor(($l+$r)/2);
//     if($numbers[$m]<$find){
//         $l = $m+1;
//     } elseif($numbers[$m]>$find){
//         $r = $m-1 ;
//     }else {
//         echo $m ;
//         break ; 
//     }
   
// }
$numbers = [1,2,3,4,5,6,7,8,9];
$find = 7;
foreach($numbers as $key =>$value){
   if($value==$find){
      echo $key ;
   }
}
