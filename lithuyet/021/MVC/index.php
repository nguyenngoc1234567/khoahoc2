
<?php
include_once 'db.php';//$conn

$page = 'list';
if( isset( $_GET['page'] ) && $_GET['page'] != '' ){
    $page = $_GET['page'];
}

// Gọi Controller
include_once 'controllers/MatHangController.php';
include_once 'controllers/LoaiHoangController.php';


$objController =  new MatHangController();
switch ($page) {
    case 'mat_hang/list':
        $objController->list();
        break;
    case 'mat_hang/add':
        $objController->add();
        break;
    case 'mat_hang/edit':
        $objController->edit();
        break;
    case 'mat_hang/delete':
        $objController->delete();
        break;
    default:
        $objController->list();
        break;
}

$objController =  new LoaiHangController();
switch ($page) {
    case 'list':
        $objController->list();
        break;
    case 'add':
        $objController->add();
        break;
    case 'edit':
        $objController->edit();
        break;
    case 'delete':
        $objController->delete();
        break;
    default:
        $objController->list();
        break;
}