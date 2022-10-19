<?php
$array = [
    1, 23, 32, 5,43, 321, 312, 352, 2, 13 ,153, 21,32 ,1
];
unset($array[0]);

foreach ($array as $key => $value) {

    echo $value . '<br>';
};
echo '<pre>';
print_r($array);
echo '</pre>';



