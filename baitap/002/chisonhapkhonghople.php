
<?php
if ( $_SERVER['REQUEST_METHOD']== 'POST') {
    $sonhapvao = $_REQUEST['sonhapvao'];
    
$array = [
    1, 2, 3, 5, 4, 3, 312, 352, 2, 13, 153, 21, 32, 1,32,43,22,33,2,2,1
];

$sonhapvao = $sonhapvao;
if (isset($array[$sonhapvao])) {
    echo $array[$sonhapvao];
} else {
    echo 'chi so vuot qua gioi han cua mang';
};
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
  <input type="text"  name="sonhapvao" ><br>
  <input type="submit" value="Submit">
</form>
</body>
</html>