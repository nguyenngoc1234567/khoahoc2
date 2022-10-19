<?php
if ( $_SERVER['REQUEST_METHOD']== 'POST') {
    $nhapmotchuoi = $_REQUEST['nhapmotchuoi'];
    $nhapchucantim = $_REQUEST['nhapchucantim'];
    $count = 0 ;
   
    for($i= 0 ; $i < strlen($nhapmotchuoi);$i++){
        if($nhapmotchuoi[$i]==$nhapchucantim){
            $count++;
        }
    }
    echo $count;
}       


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action=""method='post'>
<label for="">Nhập một chuỗi</label><br>
  <input type="text"  name="nhapmotchuoi" ><br>
  <label for="">Nhập chữ cần tìm :</label><br>
  <input type="text"  name="nhapchucantim" ><br>
  <input type="submit" value="Submit">
</form>
</body>
</html>