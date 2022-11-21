<?php
class Node
{
    //tt
    public  $data = '';
    public  $next = null;
    //pt
    public function __construct($data)
    {
        $this->data = $data;
    }
}
class LinkedList {
    public $head = null;
    public function addFirst($item){
        $node = new Node($item);
        if ($this->head == null){
            $this->head = $node;
        }else{
            // $this->head->next = $node;
            $currentNode = $this->head;
            while ($currentNode->next!= null){
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $node;
        }
        // them vao dau
        // $this->head = $node;

        // echo '<pre>';
        // print_r($node);
        // echo '</pre>';
    }
}
$objLinkedList = new LinkedList();
$objLinkedList->addFirst('toan');
$objLinkedList->addFirst('truong');
$objLinkedList->addFirst('ngoc');
$objLinkedList->addFirst('tam');

echo '<pre>';
print_r($objLinkedList);
echo '</pre>';


