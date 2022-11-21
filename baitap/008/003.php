<?php

class Node
{
    // gia tri
    public string $data;
// chitới tiep theo 
    public  $next=null;

    public function __construct($data)
    {
        $this->data=$data;
    }
}
// nốt 
class LinkedList {
 public $elements = [];

 public $count = 0 ;
 public $firstNode ;
 public $lastNode ;
public function add($index){
    array_push($this->elements , $index);

}
//tham phan tu dau tien 
public function addFirst(){
 
}
// them phan tu cuoi cung
public function addLast(){

}
    // xoa mot phan tu 
public function remove($index){
    unset($this->elements[$index]);
}
    // lay mot phan tu 
public function get($index){
    return $this->elements[$index];
}
public function size(){
    return count($this->elements);
}
public function printList(){

}
public function clone(){

}
public function contains(){

}
public function indexOf(){

}

}
$objLinkedList = new LinkedList();
$objLinkedList->add('aaa');
$objLinkedList->add('bbbb');
$objLinkedList->add('ccc');
$objLinkedList->add('ddddd');
$objLinkedList->add('eeeee');
 echo $objLinkedList->get(1);
  echo $objLinkedList->size();
  echo $objLinkedList->remove(1);


echo '<pre>';
print_r($objLinkedList);
echo '</pre>';