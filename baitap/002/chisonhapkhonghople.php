<?php
$array = [
    1, 2, 3, 5, 4, 3, 312, 352, 2, 13, 153, 21, 32, 1,32,43,22,33,2,2,1
];

$sonhapvao = 55;
if (isset($array[$sonhapvao])) {
    echo $array[$sonhapvao];
} else {
    echo 'chi so vuot qua gioi han cua mang';
};
