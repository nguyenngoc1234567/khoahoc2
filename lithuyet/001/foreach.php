<?php
$book = ['van','su','dia'];
$book = [
    0=>'van',
    1=>'su',
    2=>'dia',
];
 echo $book[0];
$info = [
    'ten' => 'ngoc',
    'ngay_sinh'=> '1/22/3',
    'diachi'=>' a d'
    
];
echo '<pre>'; 
print_r($book);
echo '</pre>'; 


echo $info['ten'];


echo '<pre>'; 
print_r($info);
echo '</pre>'; 

foreach($book as $key=>$value){
    // 
    echo $value.'<br>';
}

