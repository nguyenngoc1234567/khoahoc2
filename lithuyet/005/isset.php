<?php

/*
isset kem trasu ton tai cua bien hoacj chi so trong mang
input 1 bien,mang, chi so mang
output boolea
*/
var_dump(isset($name));
$info=[
    'name'=>'nguyen van A'
];
var_dump(isset($info['name']));//true
var_dump(isset($info['proce']));// false
echo'<hr>';