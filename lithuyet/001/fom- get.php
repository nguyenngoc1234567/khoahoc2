<?php

//kiem tra ton tai du lieu username hoac password
if( isset( $_GET['username'] ) || isset( $_GET['password'] ) ){
 echo '<pre>'; 
 print_r($_GET);
 echo '</pre>';
 $username = $REQUEST['username'];
 $password = $_GET['password'];
 echo 'mat khau la:'.$password;
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
    <form action="" method="GET">
        Username: <input type="text" name="username"> <br>
        Password: <input type="password" name="password"> <br>
        <input type="submit" value="Login">
    </form>
</body>
</html>