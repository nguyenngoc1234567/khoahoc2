<?php
$A = [ 8,6,34,22,40,5,11,23,44,8];
$n= count($A);

for ($i=0;$i<$n;$i++){
    //      9   1
    for($k=$n-1;$k>$i;$k--){
        //neu phan tu hien tai nho hon phan tu dung sau

        if($A[$k]<$A[$k-1]){

            $temp = $A[$k-1]  ;//44
            $A[$k-1] = $A[$k];

            $A[$k] = $temp;
        }
           
    }
}
echo '<pre>';
print_r($A);
echo'</pre>';