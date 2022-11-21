<?php
include_once 'db.php';

// echo '<pre>';
// print_r($_REQUEST);
// die();
//
$id = $_REQUEST['id'];
// echo $id;
$sql = "DELETE FROM `luyentap` WHERE `luyentap`.`ID` = $id ";
// echo $sql;
$conn->exec($sql);

//chuyen huong ve trang list.php
header("Location: list.php");