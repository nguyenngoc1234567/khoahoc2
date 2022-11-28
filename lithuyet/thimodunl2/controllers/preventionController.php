<?php
include_once 'models/Prevention.php';

class preventionController {
    // trang danh sach
    public function list(){
        echo __METHOD__;
        $objPrevention = new Prevention();
        $rows = $objPrevention->all();
        include_once 'views/Prevention/list.php';
    }
    //trang them moi
    public function add(){
        if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
            // echo '<pre>';
            // print_r($_REQUEST);
            // die();
            $objPrevention = new Prevention();
            $objPrevention->store( $_REQUEST );
            header("Location: index.php?page=list");
        }
        include_once 'views/Prevention/add.php';
    }
    //trang chinh sua
    public function edit(){
        
            $id = $_REQUEST['id'];
            $objPrevention = new Prevention();
            $row = $objPrevention->find( $id );
    
            // xu ly khi gui du lieu
            if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
                $objPrevention->update($id,$_REQUEST);
                header("Location: index.php?page=list");
            }
            
            include_once 'views/Prevention/edit.php';
    
    }
    //trang xoa
    public function delete(){
        $id = $_REQUEST['id'];
        $objPrevention = new Prevention();
        $objPrevention->delete($id);
        header("Location: index.php?page=list");
    }
}


