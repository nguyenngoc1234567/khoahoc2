<?php
include_once 'models/category.php';

class categoryController {
    // trang danh sach
    public function list(){
        echo __METHOD__;
        $objcategory = new category();
        $rows = $objcategory->all();
        include_once 'views/category/list.php';
    }
    //trang them moi
    public function add(){
        if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
            // echo '<pre>';
            // print_r($_REQUEST);
            // die();
            $objcategory = new category();
            $objcategory->store( $_REQUEST );
            header("Location: index.php?page=list");
        }
        include_once 'views/category/add.php';
    }
    //trang chinh sua
    public function edit(){
        
            $id = $_REQUEST['id'];
            $objcategory = new category();
            $row = $objcategory->find( $id );
    
            // xu ly khi gui du lieu
            if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
                $objcategory->update($id,$_REQUEST);
                header("Location: index.php?page=list");
            }
            
            include_once 'views/category/edit.php';
    
    }
    //trang xoa
    public function delete(){
        $id = $_REQUEST['id'];
        $objcategory = new category();
        $objcategory->delete($id);
        header("Location: index.php?page=list");
    }
}


