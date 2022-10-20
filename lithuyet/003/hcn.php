<?php


class HCN {
    // thuoc tinh
    public $dai ='0';
    public $rong ='0';
   // ham khoi tao
   public function __construct($ts_dai,$ts_rong)
   {
    $this->dai =$ts_dai ;
    $this->rong = $ts_rong ;
   }
    // setter 
    public function setChieuDai ($ts_dai){
        $this->dai = $ts_dai;
    }

    public function setChieuRong ($ts_rong){
        $this->rong =$ts_rong;
    }
    //getter
    public function getChieuDai (){
       return $this-> dai ;
    }
    public function getChieuRong (){
        return $this-> rong ;
    }

    
    public function tinhChuVi(){
        $ket_qua = ($this->dai + $this->rong ) * 2 ;
        echo 'chu vi la: '.$ket_qua;
    }
    public function tinhDienTich(){
        $ket_qua = $this->dai * $this->rong  ;
        echo 'dien tich la: '.$ket_qua ; 
    }
}

// khoi tao doi tuong 
$hcn_1 = new HCN(20,10);
// thiet lap gia tri thuoc tinh 
// $doi_tuong_1->dai = 20 ;
$hcn_1->setChieuDai (21);
$hcn_1->setChieuRong (11);
//tra ve 
$hcn_1->getChieuDai ();
$hcn_1->getChieuRong ();
 

// $hcn_1->rong = 10 ; 

// truy cap 2 phuong thuc 

$hcn_1->tinhChuVi();
echo '<br>';
$hcn_1->tinhDienTich();

echo '<pre>'; 
print_r($hcn_1);
echo '</pre>'; 






 
