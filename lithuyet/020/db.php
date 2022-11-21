<?php
$username = 'root';
$password = '';
$database = 'luyentap2';
 try {
$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
 }catch(Exception$e){
    // echo $e->getMessage();  
    echo '<h1><khong the ket noi></h1>';
 }


