<?php
if ( $_SERVER['REQUEST_METHOD']== 'POST') {
    $nhap = $_REQUEST['nhap'];
    $pattern = '/([\+84|84|0]+(3|5|7|8|9|1[2|6|8|9]))+([0-9]{8})\b/';
        if (preg_match($pattern, $nhap)) {
            echo 'Số điện thoại : '.$nhap.' hợp lệ .';
        } else {
            echo 'Số điện thoại : '.$nhap.' không hợp lệ';
        }      
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
<form action="" method="post">
  <label for="fname">Nhập số điện thoai :</label><br>
  <input type="text" id="" name="nhap" value=""><br>
  <input type="submit" value="Submit">
</form>
</body>
</html>