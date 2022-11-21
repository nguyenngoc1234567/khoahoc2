<?php
//  abstract class toanhoc {
//     abstract function tinhtoan();
    
// }

// abstract class HinhHoc extends toanhoc {
//     abstract function tinhChuVi();
//     abstract function tinhdientich();
// }
// class hinhvuong extends HinhHoc {
//     public function tinhChuVi(){

//     }
//     public function tinhdientich(){
        
//     }
//     public function tinhtoan(){
        
//     }
// }
abstract class Human{
    abstract function say ();
}
//interface
 interface Bird{
    function Fly();
}
interface Fish{
    function swiming();

}
// trien khai interface
 class suppeMan extends Human implements Bird,Fish {
    public function say (){

    }
    public function fly(){
        
     }
     public function swiming(){
        
     }

 }
