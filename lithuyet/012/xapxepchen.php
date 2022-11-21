<?php
$A = [8, 6, 34, 22, 40, 5, 11, 23, 44, 8];
$n = count($A); //10
for ($i = 0; $i < $n; $i++) {
    $j = $i - 1;
    $t = $A[$i];
    
    while ($t < $A[$j] && $j>=0) {

        $A[$j + 1] = $A[$j];
        $j--;
    }
    $A[$j + 1] = $t;


}
echo '<pre>';
print_r($A);
echo'</pre>';
