<?php
$array = [
    1, 23, 32, 5,43, 321, 312, 352, 2, 13 ,153, 21,32 ,1,-1
];
 
$min = null;
$position = null;
 
for ($i = 0; $i < count($array); $i++)
{
    if ($min == null){
        $min = $array[$i];
        $position = $i;
    }
    else {
        if ($array[$i] < $min){
            $min = $array[$i];
            $position = $i;
        }
    }
}
 
echo " gia tri nho nhat $min";