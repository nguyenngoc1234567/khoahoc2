<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sothunhat = $_REQUEST['sothunhat'];
    $sothuhai = $_REQUEST['sothuhai'];
    $pheptinh = $_REQUEST['pheptinh'];
    if ($sothunhat != "" && $sothuhai != "") {
        switch ($pheptinh) {
            case '+':
                $ketqua = $sothunhat + $sothuhai;
                echo $ketqua;
                break;
                case '-':
                    $ketqua = $sothunhat - $sothuhai; 
                    echo $ketqua ;
                    break;
            case '-':
                $ketqua = $sothunhat - $sothuhai;
                echo $ketqua;
                break;
           
            case '/':
                if ($sothuhai == 0) {
                    echo 'lỗi';
                } else {
                    $ketqua = $sothunhat / $sothuhai;
                    echo $ketqua;
                }
                break;
        }
    } else {
        echo 'nhập số';
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
        <label for="">nhập số thứ nhất:</label><br>
        <input type="text" name="sothunhat"><br>
        <select name="pheptinh">
            <option value="+">cộng</option>
            <option value="-">trừ</option>
            <option value="*">nhân</option>
            <option value="/" selected>chia</option>
        </select><br>
        <label for="">nhập số thứ hai:</label><br>
        <input type="text" name="sothuhai"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>