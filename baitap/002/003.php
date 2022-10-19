<?php
$tusach = [
   ['Van','Su','Dia'],
   ['Toan','Ly','Hoa']
    ];
    echo '<pre>';
print_r($tusach);
echo '</pre>';
//truy xuat 
 echo $tusach[1][1];
 // duyet mang 
 foreach($tusach as $books){
    
    foreach($books as $book){
        echo '<br>'.$book ;
    }
}


 
?>