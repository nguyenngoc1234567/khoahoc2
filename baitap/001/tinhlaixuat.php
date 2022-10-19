<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sotien = $_POST['sotien'];
    $donvi = $_POST['donvi'];
    if ($donvi == 'usd'){
        echo $ketqua = $sotien *0,3;

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
            
        </select>
        <input type="submit" value="chuyen doi">
    </form>
</body>

</html>