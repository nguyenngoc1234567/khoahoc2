<?php

if ( $_SERVER['REQUEST_METHOD']== 'POST') {
    $nhapgmail = $_REQUEST['nhapgmail'];
    $pattern = '/^[a-zA-Z0-9]+@[a-zA-Z0-9]+(\.[a-zA-Z0-9]+$)/';
if (preg_match($pattern, $nhapgmail)) {
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
  <label for="fname">Nhập gmail :</label><br>
  <input type="text" id="" name="nhapgmail" value=""><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>