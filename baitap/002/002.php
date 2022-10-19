<?php

/*
$info = [
        'name' => 'IPhonex',
        'price' => '20000',
        'color' => 'black'
    ];

    //lay do dai

    //truy xuat IPhonex

    //thay doi IPhonex => IPhone ProMax

    //xoa color

    //in mang

    //duyet mang
*/
$info = [
    'name' => 'IPhonex',
    'price' => '20000',
    'color' => 'black'
];
// duyet mNG
foreach ($info as $key => $value) {
    
    echo $value . '<br>';
};
//lay do dai
echo count($info);
//truy xuat 
echo $info['name'];

// thay doi
$info['name'] = 'IPhone ProMax';
// xoa 
unset($info['color']);
//in 
echo '<pre>';
print_r($info);
echo '</pre>';
