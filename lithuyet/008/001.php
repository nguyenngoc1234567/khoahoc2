<?php

//container
class ArrayList {
    //element các phần tử dữ liệu 
    protected $elements = [];

    //thêm 1 phần tử

    public function add($item){
        array_push($this->elements , $item);
    }
    //lấy về 1 phần tử
    public function get($index){
        return $this->elements[$index];
    }

    //xóa 1 phần tử
    public function remove($index){
        unset($this->elements[$index]);
    }

    //lấy về số lượng phần tử
    public function size(){
        return count($this->elements);

    }
    //tìm kiếm phần tử 
    public function find($item){
        return array_search($item, $this->elements);
    }
    //kiểm tra rỗng
    public function isEmpty(){
        if(count($this->elements) > 0){
            return 'false';
    }else{
        return 'true';
    }
}
    //cập nhật 
    public function update($index , $item){
        $this->elements[$index] = $item;
    }
    //kiểm tra chỉ số có tồn tại trong mảng hay ko
    public function getByIndex($index){
        return $this->elements[$index];
        
    }




}
//khởi tạo đối tượng
$objarraylist = new ArrayList();


$objarraylist->add('Toàn');
$objarraylist->add('Trường');
$objarraylist->add('Ngọc');
$objarraylist->add('hoang');
$objarraylist->add('dang');
$objarraylist->add('toan');
//xóa phần tử ở vị trí index là 3
$objarraylist->remove(3);
//cập nhật (thay đổi)
$objarraylist->update(3,'tran');
echo '<br>';
//lấy phần tử
echo $objarraylist->get(1);
echo '<br>';
//tìm phần tử
echo $objarraylist->find('Ngọc');
echo '<br>';
//kiểm tra rỗng
echo $objarraylist->isEmpty();



echo '<pre>';
print_r($objarraylist);
echo '</pre>';
