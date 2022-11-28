<?php
class Patient
{
    public function all()
    {
        global $conn;
        $sql = "SELECT patient.*, prevention.Name_prevention FROM patient join 
         prevention on patient.class = prevention.ID ORDER BY ID DESC; ";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ); //array => objec
        $rows = $stmt->fetchAll();
        return $rows;
    }
    //tra ve recond theo id
    public function find($id)
    {
        global $conn;
        $sql = "SELECT * FROM `patient`WHERE 	ID  = '$id'";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ); //array => object
        $row = $stmt->fetch();
        return $row;
    }
    //xu ly them moi
    public function store($data)
    {
        global $conn;
        $patient = $data['patient'];
        $day_hoppital = $data['day_hoppital'];
        $status = $data['status'];
        $information_patient = $data['information_patient'];
        $gender = $data['gender'];
        $class = $data['class'];

        global $conn;
        $sql = "INSERT INTO `patient` 
        (`patient`,`day_hoppital`,`status`,`information_patient`,`gender`,`class`) 
        VALUES 
        ('$patient','$day_hoppital','$status','$information_patient','$gender','$class')";
        $conn->exec($sql);
    }
    //xu ly them moi
    public function update($id,$data)
    {
        global $conn;
        $patient = $data['patient'];
        $day_hoppital = $data['day_hoppital'];
        $status = $data['status'];
        $information_patient = $data['information_patient'];
        $gender = $data['gender'];
        $class  = $data['class'];
        
        $sql = " UPDATE `patient` SET 
            `patient` ='$patient',
             `day_hoppital`='$day_hoppital',
             `status`='$status',
             `information_patient`='$information_patient',
             `gender`='$gender',
             `class`= '$class'
        WHERE `ID` = $id";
        $conn->exec($sql);
    }
    //xu ly xoa
    public function delete($id)
    {
        global $conn;
        $sql = "DELETE FROM `patient` WHERE ID = $id";
        $conn->exec($sql);
    }
};
