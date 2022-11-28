 <?php
include_once 'models/Patient.php';
include_once 'models/Prevention.php';

class patientController {
    // trang danh sach
    public function list(){
        echo __METHOD__;
        $objPatient = new Patient();
        $rows = $objPatient->all();
        include_once 'views/Patient/list.php';
    }
    //trang them moi
    public function add(){
        $objPrevention = new Prevention();
        $rows1 = $objPrevention->all();
        if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
           
            
            // echo '<pre>';
            // print_r($_REQUEST);
            // die();
            $objPatient = new Patient();
            $objPatient->store( $_REQUEST );
            header("Location: index.php?page=list");
        }
        include_once 'views/Patient/add.php';
    }
    //trang chinh sua
    public function edit(){
        
            $id = $_REQUEST['id'];
            $objPatient = new Patient();
            $row = $objPatient->find( $id );
    
            // xu ly khi gui du lieu
            if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
                $objPatient->update($id,$_REQUEST);
                header("Location: index.php?page=list");
            }
            
            include_once 'views/Patient/edit.php';
    
    }
    //trang xoa
    public function delete(){
        $id = $_REQUEST['id'];
        $objPatient = new Patient();
        $objPatient->delete($id);
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