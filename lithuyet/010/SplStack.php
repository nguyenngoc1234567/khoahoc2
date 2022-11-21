<?php
$q = new SplStack();
$q->push('toan');
$q->push('truong');
$q->push('ngoc');
// đưa con tro ve vi tri ban dau
$q->rewind();
while ($q->valid()){
    var_dump($q->valid());
    echo '<br>'.$q->current();//ngoc
    $q->next();//di chuyen con tro toi mot buoc
var_dump($q->valid());
    
}



// var_dump($q->valid());
// echo '<br>'.$q->current();//truong
// $q->next();//di chuyen con tro toi mot buoc


// var_dump($q->valid());
// echo '<br>'.$q->current();//toan
// $q->next();//di chuyen con tro toi mot buoc

// var_dump($q->valid());
// echo '<br>'.$q->current();//toan
// $q->next();//di chuyen con tro toi mot buoc


echo '<pre>';
print_r($q);
echo'</pre>';