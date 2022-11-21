<?php
class cha{
    //thuộc tính
    protected $skinColor = 'yellow';
    protected $carName = 'VF6';

    //phuong thuc
    public function xe_hoi(){
        echo '<br>'.$this->carName;
    }
    public function nha(){
        echo'<br> nha 3 tang';
    }
    // ngawn ngua suwj ghi de
    //  public final function nha(){
    //     echo'<br> nha 3 tang';
    // }
  
}
//


class con extends cha {
    // ghi de phuong thuc cua lop cha 
    public function xe_hoi(){
        // parent ::xe_hoi();
        //parent  goi toi phuong thuc cha 
        $this->nha();
        echo $this->carName.'- do len VF9';
    }
    public function nha(){
        echo'<br> nha 4 tang';
    }
  
        
}
// khoi tao doi tuong 
 $con_1 = new con();
 $con_1 -> xe_hoi();

 // truy cap thuoc tinh 
 echo'<br>';
 echo '<pre>';
 print_r($con_1);
 die();
