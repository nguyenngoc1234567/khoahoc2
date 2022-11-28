<?php
class prevention
{
    public function all()
    {
        global $conn;
        $sql = "SELECT * FROM `prevention`";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ); //array => object
        $rows = $stmt->fetchAll();
        return $rows;
    }
    //tra ve recond theo id
    public function find($id)
    {
        global $conn;
        $sql = "SELECT * FROM `Prevention`WHERE ID  = '$id'";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ); //array => object
        $row = $stmt->fetch();
        return $row;
    }
    //xu ly them moi
    public function store($data)
    {
        global $conn;
        $Name_prevention = $data['Name_prevention'];

        global $conn;
        $sql = "INSERT INTO `prevention` 
        (`Name_prevention`) 
        VALUES 
        ('$Name_prevention') ";
        $conn->exec($sql);
    }
    //xu ly them moi
    public function update($id, $data)
    {
        global $conn;
        $Name_prevention = $data['Name_prevention'];
        
        $sql = " UPDATE `prevention` SET 
            `Name_prevention` = '$Name_prevention'
        WHERE `ID` = $id";
        $conn->exec($sql);
    }
    //xu ly xoa
    public function delete($id)
    {
        global $conn;
        $sql = "DELETE FROM `prevention` WHERE ID = $id";
        $conn->exec($sql);
    }
};
