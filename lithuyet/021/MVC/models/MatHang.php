<?php
class MatHang
{
    public function all()
    {
        global $conn;
        $sql = "SELECT * FROM `c10_mat_hang`";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ); //array => object
        $rows = $stmt->fetchAll();
        return $rows;
    }
    //tra ve recond theo id
    public function find($id)
    {
        global $conn;
        $sql = "SELECT * FROM `c10_mat_hang`WHERE MAHANG = '$id'";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ); //array => object
        $row = $stmt->fetch();
        return $row;
    }
    //xu ly them moi
    public function store($data)
    {
        global $conn;
        $TENHANG = $data['TENHANG'];
        $MACONGTY = $data['MACONGTY'];
        global $conn;
        $sql = "INSERT INTO `c10_mat_hang` 
        (`TENHANG`, `MACONGTY`) 
        VALUES 
        ('$TENHANG', $MACONGTY) ";
        $conn->exec($sql);
    }
    //xu ly them moi
    public function update($id, $data)
    {
        global $conn;
        $TENHANG = $data['TENHANG'];
        $MACONGTY = $data['MACONGTY'];
        $sql = " UPDATE `c10_mat_hang` SET 
            `TENHANG` = '$TENHANG',
            `MACONGTY` = '$MACONGTY'
        WHERE `MAHANG` = $id";
        $conn->exec($sql);
    }
    //xu ly xoa
    public function delete($id)
    {
        global $conn;
        $sql = "DELETE FROM `c10_mat_hang` WHERE MAHANG = $id";
        $conn->exec($sql);
    }
};
