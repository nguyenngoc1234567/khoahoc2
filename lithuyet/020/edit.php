<?php
include_once 'db.php'; //$conn
// edit.php?id=3
$luyentap = $_REQUEST['id']; //3
// var_dump($MAHANG);die();
$sql = "SELECT * FROM `luyentap` WHERE ID = $luyentap";
// var_dump($sql);die();
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ); //array => object
$row = $stmt->fetch();
// debug
// echo '<pre>';
// print_r( $row );
// echo '</pre>';

// xu ly khi gui du lieu
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // echo '<pre>';
    // print_r( $_REQUEST );
    // echo '</pre>';

    $CODE = $_REQUEST['CODE'];
    $NAME = $_REQUEST['NAME'];
    $EMAIL = $_REQUEST['EMAIL'];
    $ADDRESS = $_REQUEST['ADDRESS'];
    $PHONE = $_REQUEST['PHONE'];
    $img = $_FILES['IMAGE']['name'];
    $tmp_img = $_FILES['IMAGE']['tmp_name'];
    $div = explode('.', $img);
    $file_ext = strtolower(end($div));
    $unique_image = $div[0] . time() . '.' . $file_ext;
    $path_uploads = "public/uploads/luyentap/" . $unique_image;
    move_uploaded_file($tmp_img, $path_uploads);
    $sql = " UPDATE `luyentap` SET 
            `CODE` = '$CODE',
            `NAME` = '$NAME',
            `EMAIL` = '$EMAIL',
            `ADDRESS` = '$ADDRESS',
            `PHONE` = '$PHONE',
            `IMAGE` = '$unique_image'
        WHERE `luyentap`.`ID` = $luyentap";
    // var_dump($sql);die();
    $conn->exec($sql);
    //chuyen huong
    header("Location: list.php");
}

?>
<form action="" method="post" enctype="multipart/form-data">
    CODE :<input type="text" name="CODE" value="<?= $row->CODE; ?>"> <br>
    NAME: <input type="text" name="NAME" value="<?= $row->NAME; ?>"> <br>
    EMAIL: <input type="text" name="EMAIL" value="<?= $row->EMAIL; ?>"> <br>
    ADDRESS: <input type="text" name="ADDRESS" value="<?= $row->ADDRESS; ?>"> <br>
    PHONE: <input type="text" name="PHONE" value="<?= $row->PHONE; ?>"> <br>

    <label for="pwd">Hình ảnh sản phẩm</label>
    <input type="file" name="IMAGE" class="form-control">
    <p> <img src="<?php echo 'http://localhost/modunl2/lithuyet/020/public/uploads/luyentap/' ?><?php echo $row->IMAGE ?>" height="100" width="100"></p>
    <input type="submit" value="Cap nhat">
</form>