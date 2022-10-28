<?php
class Mylist
{
    public $elements = [];
    public $size = 10;
    // 
    public function addAll($arr)
    {
        if ($this->size() >= ($this->getCount() + count($arr))) {
            $this->elements = array_merge($this->elements, $arr);
        } else {
            echo "Array limited ";
        }
        return $this->elements;
    }
    // xoa mot phan tu 
    public function remove($index)
    {
        unset($this->elements[$index]);
    }
    // lay mot phan tu 
    public function get($index)
    {
        return $this->elements[$index];
    }
    //chèn phần tử vào mảng
    public function insert( $index,$obj): void
    {
       array_splice($this->elements, $index, 0,$obj);
    }
    // xoa het
    public function clear()
    {
        $this->elements = [];
       
    }
    public function add($obj)
    {
        array_push($this->elements, $obj);
    }
    // mang xap xep 
    public function sort()
    {
        sort($this->elements);
        return($this->elements);
    }
    // thiet lap con trỏ
    public function reset()
    {
       return reset( $this->elements);
    }
    //lay ve so luong phan tu 
    public function size()
    {
        return count($this->elements);
    }
    // tim phan tu trong mang
    public function indexOf($obj)
    {
        return array_search($obj, $this->elements);
    }
    // kiem tra rong
    public function isEmpty()
    {
        if (count($this->elements) > 0) {
            return 'false';
        } else {
            return 'true';
        }
    }
    public function getCount(): int
    {
        return count($this->elements);
    }
}
// khoi tao doi tuong
$objmylist = new Mylist();

$objmylist->add('a');
$objmylist->add('b');
$objmylist->add('c');
$objmylist->add('d');
$objmylist->add('e');
// xoa mot phan tu
$objmylist->remove(3);
// xoa het 
$objmylist->remove(3);
//chèn phần tử vào mảng
$objmylist->insert(3,'k');
//tìm phần tu trong mang
echo $objmylist->indexOf('e');

//thiet lap con trỏ
echo $objmylist->reset();

// $objmylist->addAll($arr_1);
print_r($objmylist);
$arr = [0,1,2,3,4];

// mang sắp xếp 
var_dump($objmylist->sort());
$objmylist->addAll($arr);
$objmylist->clear();


echo '<pre>';
print_r($objmylist);
echo '</pre>';
