<?php
 $books = ['van ','su','dia'];
 $temp= $books[1];//su
 $books[1]= $books[2];// dia
 $books[2]= $temp;//su
 echo '<pre>';
print_r($books);
echo'</pre>';