<?php

/*  
class <class_name> {
    // thuoc tinh
public $thuoc_tinh_1 ='';
public $thuoc_tinh_2 ='';

    // phuong thuc 

    public functio phuong_thuc_1(){
        
    }
    public functio phuong_thuc_2(){
        
    }
};



    //khoi tao doi tuong 
    $doi_tuong_1=new classname();

    //thiet lap gia tri thuoc tinh 
    $doi_tuong_1->thuoc_tinh =gia_tri

    // truy cap thuoc tinh 
    echo  $doi_tuong_1->thuoc_tinh_1;
    echo  $doi_tuong_1->thuoc_tinh_2;

    // truy cap phuong thuc 
    $doi_tuong_1->phuong_thuc_1();
     $doi_tuong_1->phuong_thuc_2();

*/
class SinhVien
{
    function __destruct() {
        echo 'Lớp Sinh Viên vừa được khởi tạo';
    }
}
  
// khởi tạo lớp SinhVien
$sinhvien = new SinhVien();