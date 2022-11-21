<?php
$q = new SplQueue();
$q -> enqueue('toan');
$q -> enqueue('truong');
$q -> enqueue('ngoc');
$q->rewind();
while ($q->valid()){
    var_dump($q->valid());
    echo '<br>'.$q->current();//ngoc
    $q->next();//di chuyen con tro toi mot buoc 
}
echo '<pre>';
print_r($q);
echo'</pre>';
