<?php
class products
{
    public function all()
    {
        global $conn;
        $sql = "SELECT products.*, category.catName , brand.brandName FROM products join 
        category on products.carld = category.ID join
         brand on products.brand_id = brand.ID ORDER BY id DESC; ";
   
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ); //array => object
        $rows = $stmt->fetchAll();
        // var_dump($rows);
        // die();
        return $rows;
    
        
    }
    //tra ve recond theo id
    public function find($id)
    {
        global $conn;
        $sql = "SELECT * FROM `products`WHERE ID = '$id'";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ); //array => object
        $row = $stmt->fetch();
        return $row;
    }
    //xu ly them moi
    public function store($data)
    {
        global $conn;
        $productName = $data['productName'];
        $stock = $data['stock'];
        $carld = $data['carld'];
        $brand_id = $data['brand_id'];
        $product_desc = $data['product_desc'];
        $type = $data['type'];
        $price = $data['price'];
        $img = $_FILES['image']['name'];
        $tmp_img = $_FILES['image']['tmp_name'];
        $div = explode('.',$img);
        $file_ext = strtolower(end($div));
        $unique_image= $div[0].time().'.'.$file_ext;
        $path_uploads="public/uploads/luyentap/".$unique_image;
        move_uploaded_file($tmp_img,$path_uploads);
        global $conn;
        $sql = "INSERT INTO `products` 
        (`productsName`,`stock`,`carld`,`brand_id`,`product_desc`,`type`,`price`,`image`) 
        VALUES 
        ('$productName','$stock','$carld','$brand_id','$product_desc','$type','$price','$unique_image') ";
       
    //    var_dump($sql);
    //     die();
        $conn->exec($sql);
  
    }
    //xu ly them moi
    public function update($id, $data)
    {
        global $conn;
        $productName = $data['productName'];
        $stock = $data['stock'];
        $carld = $data['carld'];
        $brand_id = $data['brand_id'];
        $product_desc = $data['product_desc'];
        $type = $data['type'];
        $price = $data['price'];
        $img = $_FILES['image']['name'];
        $tmp_img = $_FILES['image']['tmp_name'];
        $div = explode('.', $img);
        $file_ext = strtolower(end($div));
        $unique_image = $div[0] . time() . '.' . $file_ext;
        $path_uploads = "public/uploads/luyentap/" . $unique_image;
        move_uploaded_file($tmp_img, $path_uploads);
        $sql = " UPDATE `products` SET 
            `productsName` = '$productName',
            `stock` = '$stock',
            `carld` = '$carld',
            `brand_id` = '$brand_id',
            `product_desc` = '$product_desc',
            `type` = '$type',
            `price` = '$price',
            `image` = '$unique_image'
        WHERE `ID` = $id";
        $conn->exec($sql);
    }
    //xu ly xoa
    public function delete($id)
    {
        global $conn;
        $sql = "DELETE FROM `products` WHERE ID = $id";
        $conn->exec($sql);
    }
};
