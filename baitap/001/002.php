<table align="left" border="1" cellpadding="3" cellspacing="0"> 
<?php
// cho age = 18
// viết chương trình thông báo "bạn được uống bia" nếu age lớn hơn hoặc bằng 18\\
// $age = 18 ;
// if ($age >=18 ){
// echo 'bạn được uống bia ';
// }else {
//     echo 'không được uống bia ';
// }

// checkin 3:
// cho money = true và age = 18;
// viết chương trình thông báo "bạn được uống bia" nếu age lớn hơn hoặc bằng 18 và money = true
//  $money = true ;
//  $age = 18 ;
//  if ($age >=18 && $money = true ){
//     echo 'bạn được uống bia';
//  }else{
//     echo'không dc uống bia';
//  }
 
//  checkin 4
// cho money = true và age = 18;
// viết chương trình thông báo "bạn được uống bia" nếu tuổi lớn hơn hoặc bằng 18 HOẶC có tiền là được

// $money = true ;
// $age = 18; 
// if ($age >= 18 && $money = true ){
//     echo'bạn được uống bia ';
// }else{
//     echo 'không hco uống bia ';
// }

// check in 5:
// cho age = 18
// dùng toán tử PHỦ ĐỊNH để kiểm tra nếu tuổi không phải là lớn hơn hoặc 18 thì in ra câu thông báo: bạn phải uống nước ngọt
// $age = 18 ; 
// if($age != 18 && $age <= 18 ){
//     echo'bạn phải uống nước ngọt';
// }else{
//     echo'uống bia';
// }


// checkin 6:
// cho money = true
// cho quan_open = true
// cho cho_no = true
// viết chương trình kiểm tra
// nếu quán mở và thỏa mãn một trong 2 điều kiện sau
// có tiền hoặc cho nợ
// thì in ra câu thông báo: bạn được nhậu
// gợi ý: dùng dấu () để nhóm điều kiện


// $money = true ;
// $quan_open = true;
// $cho_no = true ;
//  if ($quan_open = true || $cho_no = true && $money = true ){
//     echo 'bạn được nhậu';
//  }


//  checkin 7:
// dùng checkin 6: in ra câu 'bạn phải về nhà' nếu như KO thỏa mãn điều kiện trên
//  $money = true ;
// $quan_open = true;
// $cho_no = true ;
//  if ($quan_open = true || $cho_no = true && $money = true ){
//     echo 'bạn được nhậu';
//  }else{
//     echo 'bạn phải về nhà ';
//  }

//  Checkin 9:
// khai báo biến day bằng 1 giá trị bất kỳ từ 2 -> 7
// viết chương trình kiểm tra
// nếu day bằng 2 hoặc 3 hoặc 4 hoặc 5 hoặc 6 thì in ra câu đi làm
// nếu day bằng 7 thì in ra câu: sinh hoạt CLB
// trường hợp còn lại in ra câu: relax
// lưu ý: phần điều kiện đầu tiên có thể triển khai theo cách khác như sau
// nếu day lớn hơn hoặc bằng 2 và bé hơn hoặc bằng 6

//     $day = 2 ;
// if ($day ==2 || $day == 3 || $day == 4 ||$day == 5 ||$day == 6  ){
//     echo 'sinh hoạt CLB';
// }else{
//     echo'relax';
// }

// checkin 11:
// dựa theo cú pháp switch case
// viết chương trình kiểm tra biến month
// nếu month = 1: in ra câu 31 ngày
// nếu month = 2: in ra câu 28 ngày
// mặc định: in ra câu 30 ngày
 

// $month = 2 ;
// switch($month)
//     {
//         case ($month == 1 ):
//           echo ' 31 ngày ';
//         break;
//         case ($month == 2 ):
//            echo '28 ngày ';
//         break;
//         default:
//            echo '30 ngày' ;
//         break;
//     }





// Checkin 12:
// Dùng switch case
// khai báo biến day bằng 1 giá trị bất kỳ từ 2 -> 7
// viết chương trình kiểm tra
// nếu day bằng 2 hoặc 3 hoặc 4 hoặc 5 hoặc 6 thì in ra câu đi làm
// nếu day bằng 7 thì in ra câu: sinh hoạt CLB
// trường hợp còn lại in ra câu: relax


// $number = 2;
// if ($number == 2){
//     echo 'đi làm';
// }
// else if ($number == 3){
//     echo 'đi làm';
// }
// else if ($number == 4){
//     echo 'đi làm';
// }
// else if ($number == 5){
//     echo 'đi làm';
// }
// else if ($number == 6){
//     echo 'đi làm';
// }
// else {
//     echo 'relax';   
// }

// checkin 13:
// dùng toán tử 3 ngôi để viết chương trình sau
// cho age = 17
// nếu age >= 18 thì in ra uống bia, ngược lại uống rượu

// $age = 18;

// if ($age >= 18){ 
//     $x = "uống bia";
// }else { 
//     $x = "uống rượu";
// }
// echo $x;

// checkin 14:
// Cho biết răng với cú pháp:
// switch(true)
//     {
//         case (condition1):
//            //code here
//         break;
//         case (condition2):
//            //code here  
//         break;
//         default:
//            //code here 
//         break;
//     }
// dùng swith case true cho chương trình
// cho day = giá trị bất kỳ
// nếu day >= 2 và <= 6
// in ra "đi làm"
// nếu day == 7
// in ra "sinh hoạt"
// trường hợp còn lại in ra câu "relax"


//    $day = 2 ;
// switch(true)
//     {
//         case ($day >= 2 && $day <= 6 ):
//           echo ' đi làm ';
//         break;
//         case ($day == 7 ):
//            echo ' sinh hoat ';
//         break;
//         default:
//            echo 'relax';
//         break;
//     } 


// Checkin 15:
// Dùng vòng lặp for viết đoạn mã in ra các số từ 0 -> 5
// $i = 1 ;
// for ($i = 0;$i <= 5;$i++){
//     echo $i;
// } 

// Checkin 16:
// dùng vòng lặp for viết ra bảng cửu chương 5:
// kết quả dự kiến:
// 5 x 1 = 5
// 5 x 2 = 10
// 5 x 3 = 15
// ...
// 5 x 10 = 50
// Gợi ý:
// - lặp từ 1 -> 10
// - trong vòng lặp in ra: 5 x i = ( 5 * i ) 
// - lưu ý i là biến được chạy trong vòng lặp



// for($i=5; $i <= 5; $i++)  
// {  
// echo "<tr>";  
// for ($j=1; $j <= 10; $j++)  
//   {  
//   echo "<td>$i * $j = ".$i*$j."</td>";  
//   }  
//   echo "</tr>";  
//   }  


// checkin 17 :
// lặp từ 1 -> 100
// chỉ in ra các số chẵn
// hướng dẫn: số chẵn được kiểm tra bằng cách chia lấy dư cho 2 bằng 0 , chia lấy dư ( % )


// for ($i = 1 ; $i <= 100 ; $i ++ ){
//     if ($i % 2 ==0){
//         echo $i . '<br/>' ;
//     }
// } 


// check in 18:
// lặp từ 100 -> 1
// chỉ in ra số lẽ
// hướng dẫn: số lẽ được kiểm tra bằng cách chia lấy dư cho 2 không bằng 0 , chia lấy dư ( % )


// for ($i = 1 ; $i <= 100 ; $i ++ ){
//         if ($i % 3 ==0){
//             echo $i . '<br/>' ;
//         }
//     } 

// Tính tổng từ 1 - 10
// Gợi ý:
// - khai báo biến tong = 0
// - sau đó lặp từ 1-10
// - trong vòng lặp : tong = tong + i
// - in ra biến tong ngoài vong lặp 
        
// checkin 19:
// Tính tổng từ 1 - 10
// Gợi ý:
// - khai báo biến tong = 0
// - sau đó lặp từ 1-10
// - trong vòng lặp : tong = tong + i
// - in ra biến tong ngoài vong lặp


// $sum =0 ;
// for($i = 1 ; $i <=10;$i++){
//     $sum += $i ;
// }
// echo $sum;

// Checkin 20:
// Dùng vòng lặp while viết đoạn mã in ra các số từ 0 -> 5
// $i = 0 ;
//  while ($i<=5){
//   echo $i ;
//   $i++;
//  }


//  Checkin 21:
// Dùng vòng lặp while viết đoạn mã in ra các số từ 10 -> 1
// $i = 10 ;
//  while ($i >= 1){
//   echo $i ;
//   $i--;
//  }


// Checkin 22:
// Dùng vòng lặp do-while viết đoạn mã in ra các số từ 0 -> 5

// $i = 0;
// do{
//     echo "<p>" . $i . "</p>";
//     $i++; 
// }while($i < 6);



// Checkin 23:
// Dùng vòng lặp do-while viết đoạn mã in ra các số từ 10 -> 5

// $i = 10;
// do{
//     echo "<p>" . $i . "</p>";
//     $i--; 
// }while($i > 4); 




// cho i lặp từ 1->10
// nếu i bằng 5 thì dừng lại

// $num = 1;
// while ($num <= 10){
//   echo $num."\n";
//   if($num == 5){
//     echo "BREAK!";
//     break;
//   }
//   $num++ ;
// } 

// checkin 25: In ra từ 1 đến 5, bỏ qua 3

// for ($x = 1; $x < 5; $x++) {
//     if ($x == 3) {
//       continue;
//     }
//     echo ": $x <br>";
//   }

//   checkin 26: dùng continue và vòng lặp for
// để in ra các số chẵn từ 1 -> 10

//  for ($x = 0; $x < 10; $x++) {
//         if ($x % 2 == 1) {
//           continue;
//         }
//       echo $x ;
//       }



// checkin 27:
// sử dụng vòng lặp lồng nhau để in ra 1 table gồm 8 hàng và 3 cột
// gợi ý:
// - lặp 8 lần cặp thẻ tr: dùng biến i
//   trong vòng lặp trên: lặp 3 lần cặp thẻ td: dùng biến j
//   trong cặp thẻ td in ra kết quả của i và j


echo "<table> ";

  for ($i = 1; $i <= 8; $i++){
echo"<tr>";
    for($j = 1 ; $j <= 3; $j++){
echo"<td>".$i.$j."</td>";
    }
    echo" </tr> ";
  }
  echo "</table> "; 

?>




