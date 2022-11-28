
<?php
include_once 'db.php';//$conn

    global $conn;
    $sql = "SELECT patient.*, prevention.Name_prevention as Name_prevention FROM patient join prevention on patient.class= prevention.ID";
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $rows = $stmt->fetchAll();
    

$page = 'list';
if( isset( $_GET['page'] ) && $_GET['page'] != '' ){
    $page = $_GET['page'];
}

// Gọi Controller
include_once 'controllers/patientController.php';
include_once 'controllers/preventionController.php';


$objController =  new patientController();
switch ($page) {
    case 'Patient/list':
        $objController->list();
        break;
    case 'Patient/add':
        $objController->add();
        break;
    case 'Patient/edit':
        $objController->edit();
        break;
    case 'Patient/delete':
        $objController->delete();
        break;
    default:
        $objController->list();
        break;
}

$objController =  new preventionController();
switch ($page) {
    case 'prevention/list':
        $objController->list();
        break;
    case 'prevention/add':
        $objController->add();
        break;
    case 'prevention/edit':
        $objController->edit();
        break;
    case 'prevention/delete':
        $objController->delete();
        break;
    default:
        $objController->list();
        break;
}

