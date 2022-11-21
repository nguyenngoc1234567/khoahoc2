<?php
include_once 'QuadraticEquation.php';
if ( $_SERVER['REQUEST_METHOD']== 'POST') {
    $a = $_REQUEST['nhapsothunhat'];
    $b = $_REQUEST['nhapsothuhai'];
    $c = $_REQUEST['nhapsothuba'];

    // khởi tạo đói tượng
    $objQuadraticEquation = new QuadraticEquation($a,$b,$c);
    $objQuadraticEquation->GetRoot1();
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
<label for="">Nhập số thứ nhất</label><br>
  <input type="text"  name="nhapsothunhat" ><br>
  <label for="">Nhập số thứ hai :</label><br>
  <input type="text"  name="nhapsothuhai" ><br>
  <label for="">Nhập số thứ ba :</label><br>
  <input type="text"  name="nhapsothuba" ><br>
  <input type="submit" value="Submit">
</form>
</body>
</html>