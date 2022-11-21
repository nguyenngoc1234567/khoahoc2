 <?php
include_once 'db.php';
 if($_SERVER['REQUEST_METHOD']=='POST'){
     echo'<pre>';
        print_r ($_REQUEST);
    echo'</pre>'; 
    $CODE = $_REQUEST['CODE'];
    $NAME = $_REQUEST['NAME'];
    $EMAIL = $_REQUEST['EMAIL'];
    $ADDRESS = $_REQUEST['ADDRESS'];
    $PHONE = $_REQUEST['PHONE'];
    $img = $_FILES['IMAGE']['name'];
    $tmp_img = $_FILES['IMAGE']['tmp_name'];
    $div = explode('.',$img);
    $file_ext = strtolower(end($div));
    $unique_image= $div[0].time().'.'.$file_ext;
    $path_uploads="public/uploads/luyentap/".$unique_image;
    move_uploaded_file($tmp_img,$path_uploads);

    $sql = "INSERT INTO luyentap (CODE ,NAME,EMAIL,ADDRESS,PHONE,IMAGE) 
    VALUES ('$CODE','$NAME','$EMAIL','$ADDRESS','$PHONE','$unique_image')
    " ;
    // print_r($sql);

    // // echo $sql;
    // die();
$conn->exec($sql);
//chuyen huong ve trang danh sach 
header("location: list.php");
 }
?>


<form action=""method="post" enctype="multipart/form-data">
TENHANG :<input type="text" name="CODE"> <br>
NAME :<input type="text" name="NAME"> <br>
EMAIL :<input type="text" name="EMAIL"> <br>
ADDRESS :<input type="text" name="ADDRESS"> <br>
PHONE :<input type="text" name="PHONE"> <br>
IMAGE :<input type="file" name="IMAGE"> <br>
<input type="submit" value="them">

</form>
