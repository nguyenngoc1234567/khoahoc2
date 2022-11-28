
<?php
include_once 'dp.php';//$conn

$page = 'list';
if( isset( $_GET['page'] ) && $_GET['page'] != '' ){
    $page = $_GET['page'];
}

// Gọi Controller
include_once 'controllers/brandController.php';
include_once 'controllers/categoryController.php';
include_once 'controllers/productsController.php';


$objController =  new brandController();
switch ($page) {
    case 'brand/list':
        $objController->list();
        break;
    case 'brand/add':
        $objController->add();
        break;
    case 'brand/edit':
        $objController->edit();
        break;
    case 'brand/delete':
        $objController->delete();
        break;
    default:
        $objController->list();
        break;
}


$objController = new categoryController();
switch ($page) {
    case 'category/list':
        $objController->list();
        break;
    case 'category/add':
        $objController->add();
        break;
    case 'category/edit':
        $objController->edit();
        break;
    case 'category/delete':
        $objController->delete();
        break;
    default:
        $objController->list();
        break;
}

$objController = new productsController();
switch ($page) {
    case 'products/list':
        $objController->list();
        break;
    case 'products/add':
        $objController->add();
        break;
    case 'products/edit':
        $objController->edit();
        break;
    case 'products/delete':
        $objController->delete();
        break;
    default:
        $objController->list();
        break;
}
