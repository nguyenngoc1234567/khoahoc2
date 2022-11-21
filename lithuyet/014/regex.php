<?php
// \+[0-9]{2,2}\.[0-9]{3,3}\.[0-9]{3,3}\.[0-9]{3,3}
// preg_match
$string = '+84.555.666.777';
$pattern ='/\+[0-9]{2,2}\.[0-9]{3,3}\.[0-9]{3,3}\.[0-9]{3,3}/';
if (preg_match($pattern, $string)){
    echo 'Khớp';
} else {
echo 'Không khớp';
}

/*
preg_match_all
*/ 
$subject = "Chào mừng bạn đến với CodeGym. CodeGym - Hệ thống đào tạo lập trình hiện đại.";
$psttern ='/CodeGym/';

$ip = "192.168.1.1";


$pattern = '/\./';
$iparr = preg_split($pattern,$ip);
echo '<pre>';
print_r($iparr);

