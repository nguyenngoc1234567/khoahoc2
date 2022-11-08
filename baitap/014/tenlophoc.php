<?php
if ( $_SERVER['REQUEST_METHOD']== 'POST') {
    $nhap = $_REQUEST['nhap'];
$pattern = '/^([CAP])([0-9]{4,4})([GHIKLM])$/';
if (preg_match($pattern, $nhap)) {
echo 'Hợp lệ';
} else {
echo 'Không hợp lệ';
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
  <label for="fname">Nhập  để kiểm tra :</label><br>
  <input type="text" id="" name="nhap" value=""><br>
  <input type="submit" value="Submit">
</form>
</body>
</html>