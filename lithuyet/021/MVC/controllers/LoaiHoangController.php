 <?php
include_once 'models/LoaiHang.php';

class LoaiHangController {
    // trang danh sach
    public function list(){
        echo __METHOD__;
        $objLoaiHang = new LoaiHang();
        $rows = $objLoaiHang->all();
        include_once 'views/loaihang/list.php';
    }
    //trang them moi
    public function add(){
        if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
            // echo '<pre>';
            // print_r($_REQUEST);
            // die();
            $objLoaiHang = new LoaiHang();
            $objLoaiHang->store( $_REQUEST );
            header("Location: index.php?page=list");
        }
        include_once 'views/LoaiHang/add.php';
    }
    //trang chinh sua
    public function edit(){
        
            $id = $_REQUEST['id'];
            $objLoaiHang = new LoaiHang();
            $row = $objLoaiHang->find( $id );
    
            // xu ly khi gui du lieu
            if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
                $objLoaiHang->update($id,$_REQUEST);
                header("Location: index.php?page=list");
            }
            
            include_once 'views/loaihang/edit.php';
    
    }
    //trang xoa
    public function delete(){
        $id = $_REQUEST['id'];
        $objLoaiHang = new LoaiHang();
        $objLoaiHang->delete($id);
        header("Location: index.php?page=list");
    }
}


/*
    Hướng dẫn làm LoaiHang
    - Tạo controller LoaiHang và toàn bộ phương thức
    - Tạo model LoaiHang và toàn bộ phương thức
    - Tạo các file view cho list, add, edit 
    MatHang
        index.php?controller=MatHang&page=list   => Danh sach
        index.php?controller=MatHang&page=add    => Them moi
        index.php?controller=MatHang&page=edit   => Cap nhat
        index.php?controller=MatHang&page=delete => Xoa
    LoaiHang
        index.php?controller=LoaiHang&page=list   => Danh sach
        index.php?controller=LoaiHang&page=add    => Them moi
        index.php?controller=LoaiHang&page=edit   => Cap nhat
        index.php?controller=LoaiHang&page=delete => Xoa
*/ 