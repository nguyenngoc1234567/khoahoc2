<?php

$A = [8, 6, 34, 22, 40, 5, 11, 23, 44, 8];
$n = count($A);

for ($i = 0; $i < $n; $i++) {
    $min = $i;
    $j = $i + 1;
    for ($j = $i + 1; $j < $n; $j++) {
        if ($A[$j] <= $A[$min]) {
            $min = $j;
        }
    }
    $t = $A[$min];
    $A[$min] = $A[$i];
    $A[$i] = $t;
}

echo '<pre>';
print_r($A);
echo '</pre>';
