<?php
// // xu ly nguoi dung gui du lieu  len 
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     // echo '<pre>';
//     // print_r($_POST);
//     // echo '</pre>';
//     // khai bao bien 
//     $sotien = $_POST['sotien'];
//     $donvi = $_POST['donvi'];

//     if ($donvi == 'usd') {
//         $ketqua = $sotien / 23000;
//     } else {
//         $ketqua = $sotien * 23000;
//     }
//     // xuat 
//     echo $ketqua;
// }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sotien = $_POST['sotien'];
    $donvi = $_POST['donvi'];
    if ($donvi == 'usd') {
        echo $ketqua = $sotien * 23000;
    } else if ($donvi == 'vnd') {
        echo  $ketqua = $sotien / 23000;
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
        <label for="">nhập số tiền :</label><br>
        <input type="text" name="sotien"><br>
        <select name="donvi">
            <option value="vnd">Chuyen tu vn sang usd</option>
            <option value="usd">Chuyen tu usd sang vn</option>
        </select>
        <input type="submit" value="chuyen doi">
    </form>
</body>

</html>