
<?php
 // kiểm tra người dung da su dụng hay chua
 if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    echo '<pre>'; 
 print_r($_POST);
 echo '</pre>';
 $usename = $_POST['usename'];
 $password = $_POST['password'];
 // xuat ra 
 echo ' ten dang nhap :'.$usename;
//  eho '<br>'; 
 echo 'mat khau la :'.$password ; 
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
    <form action="" method="POST">
        Username: <input type="text" name="username"> <br>
        Password: <input type="password" name="password"> <br>
        <input type="submit" value="Login">
    </form>
</body>
</html>