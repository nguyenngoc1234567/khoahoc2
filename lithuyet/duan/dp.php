<?php
$username = 'root';
$password = '';
$database = 'co_so_du_lieu';
 try {
$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
 }catch(Exception$e){
    // echo $e->getMessage();  
    echo '<h1><khong the ket noi></h1>';
 }

