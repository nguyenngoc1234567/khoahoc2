<?php
class brand
{
    public function all()
    {
        global $conn;
        $sql = "SELECT * FROM `brand`";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ); //array => object
        $rows = $stmt->fetchAll();
        return $rows;
    }
    //tra ve recond theo id
    public function find($id)
    {
        global $conn;
        $sql = "SELECT * FROM `brand`WHERE 	ID  = '$id'";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ); //array => object
        $row = $stmt->fetch();
        return $row;
    }
    //xu ly them moi
    public function store($data)
    {
        global $conn;
        $brandName = $data['brandName'];

        global $conn;
        $sql = "INSERT INTO `brand` 
        (`brandName`) 
        VALUES 
        ('$brandName') ";
        $conn->exec($sql);
    }
    //xu ly them moi
    public function update($id, $data)
    {
        global $conn;
        $brandName = $data['brandName'];
        
        $sql = " UPDATE `brand` SET 
            `brandName` = '$brandName'
        WHERE `ID` = $id";
        $conn->exec($sql);
    }
    //xu ly xoa
    public function delete($id)
    {
        global $conn;
        $sql = "DELETE FROM `brand` WHERE ID = $id";
        $conn->exec($sql);
    }
};
