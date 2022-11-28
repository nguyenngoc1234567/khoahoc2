<?php
include_once 'models/products.php';
include_once 'models/category.php';
include_once 'models/brand.php';
class productsController {
    // trang danh sach
    public function list(){
        echo __METHOD__;
        $objproducts= new products();
        $rows = $objproducts->all();
     
        include_once 'views/products/list.php';
    }
    //trang them moi
    public function add(){
        $objcategory = new category();
        $rows = $objcategory->all();
        $objbrand = new brand();
        $rows1 = $objbrand->all();
        if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
            // echo '<pre>';
            // print_r($_REQUEST);
            // die();
            $objproducts = new products();
            
            $objproducts->store( $_REQUEST );
            header("Location: index.php?controller=products");
        }
        include_once 'views/products/add.php';
    }
    //trang chinh sua
    public function edit(){
        $objcategory = new category();
        $rows2 = $objcategory->all();
        $objbrand = new brand();
        $rows1 = $objbrand->all();
            $id = $_REQUEST['id'];
            $objproducts = new products();
            $row = $objproducts->find( $id );
    
            // xu ly khi gui du lieu
            if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
                $objproducts->update($id,$_REQUEST);
                header("Location: index.php?controller=products");
            }
            
            include_once 'views/products/edit.php';
    
    }
    //trang xoa
    public function delete(){
        $id = $_REQUEST['id'];
        $objproducts = new products();
        $objproducts->delete($id);
        header("Location: index.php?page=list");
    }
}


