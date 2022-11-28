<?php
class category
{
    public function all()
    {
        global $conn;
        $sql = "SELECT * FROM `category`";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ); //array => object
        $rows = $stmt->fetchAll();
        return $rows;
    }
    //tra ve recond theo id
    public function find($id)
    {
        global $conn;
        $sql = "SELECT * FROM `category`WHERE ID = '$id'";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ); //array => object
        $row = $stmt->fetch();
        return $row;
    }
    //xu ly them moi
    public function store($data)
    {
        global $conn;
        $catName = $data['catName'];

        global $conn;
        $sql = "INSERT INTO `category` 
        (`catName`) 
        VALUES 
        ('$catName') ";
        $conn->exec($sql);
    }
    //xu ly them moi
    public function update($id, $data)
    {
        global $conn;
        $brandName = $data['catName'];
        
        $sql = " UPDATE `category` SET 
            `catName` = '$brandName'
        WHERE `ID` = $id";
        $conn->exec($sql);
    }
    //xu ly xoa
    public function delete($id)
    {
        global $conn;
        $sql = "DELETE FROM `category` WHERE ID = $id";
        $conn->exec($sql);
    }
};
