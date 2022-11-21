<?php
if ( $_SERVER['REQUEST_METHOD']== 'POST') {

 $nhapsocandoan = $_REQUEST['nhapsocandoan'];

 function guestNumber($array, $number, $first, $last){
     if ($first > $last){
     return "ERRO!!!";
}
 $mid = (int)(($first + $last) / 2);
 if ($array[$mid] < $number) {
     echo "Số " . $array[$mid] . " đúng không? <br>";
     echo "Không, chưa đúng  <br>";
     return guestNumber($array, $number, $mid + 1, $last);
 } elseif ($array[$mid] > $number) {
     echo "Số " . $array[$mid] . " đúng không? <br>";
     echo "Không, gần đúng rồi <br>";
     return guestNumber($array, $number, $first, $mid - 1);
 } else {
     echo "Số " . $array[$mid] . " đúng không? <br>";
     echo "Chính xác, nó đó  <br>";
 }
}
 $array = range(1,100,1);
 echo guestNumber($array,$nhapsocandoan,0,count($array)-1);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Đoán số cần tìm </title>
</head>
<body>
<form action="" method="post">
<label for="fname"> Nhập số cần đoán :</label><br>
<input type="text" id="" name="nhapsocandoan" ><br>
<input type="submit" value="Bắt đầu tìm ">
</form> 
</body>
</html>