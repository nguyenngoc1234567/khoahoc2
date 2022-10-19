<?php
$book = ['van', 'su', 'dia'];
echo $book[0];

$book = [
    0 => 'van',
    1 => ' su',
    2 => 'dia',

];

// duyet mang 
foreach ($info as $key => $value) {
    
    echo $value . '<br>';
};


//lay do dai 
echo count($book);

//thay doi 
$book[0] = 'vanhoc';
//xoas 
unset($book[0]);
//in 
echo '<pre>';
print_r($book);
echo '</pre>';
