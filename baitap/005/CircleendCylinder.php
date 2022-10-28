<?php
 if ( $_SERVER['REQUEST_METHOD']== 'POST') {
    // in du lieu ra
    // luu vao bo nho , khai bao bien
    $radius = $_REQUEST['radius'];
    $color = $_REQUEST['color'];
    $height = $_REQUEST['height'];

class Circle {
        public $radius;
        public $color;
      
    public function __construct($radius,$color){
        $this -> radius = $radius;
        $this -> color = $color; 
        // $this -> area = $area; 
    }
    public function setRadius($radius){
        $this -> radius = $radius;
    }
    public function getRadius(){
        return $this -> radius;   
    }
    public function setColor($color){
        $this -> color= $color;
    }
    public function getColor(){
        return $this -> colorr;   
    }
    public function setArea($area){
        $this -> area= $area;
    }
    public function getArea(){
        return $this -> area;   
    }
    public function setDt($dt){
        $this -> dt= $dt;
    }
    public function getDt(){
        return ' Diện tích hình tròn :'.pi()*pow($this->radius,2);   
    }
    }  
class Cylinder extends Circle{
    public $height;
    public function volume(){
        return $this ->area * $this -> height;
    }
    public function setHeight($height){
        $this -> height= $height;
    }
    public function getTt(){
        return ' Thể tích hình trụ :'. pi() * pow($this->radius,2) * $this->height;
    }
    }
    $Cylinder1 = new Cylinder($radius,$height,$color);
    $Cylinder1->setRadius($radius);
    $Cylinder1->setHeight($height);
    $Cylinder1->setColor($color);

    echo $Cylinder1 ->getDt();
    echo '<br>';
    echo $Cylinder1->getTt();
}
?>
<form action="" method="post">
<label for="fname">Nhập radius:</label><br>
<input type="text" id="" name="radius"><br>
<label for="lname">Color:</label><br>
<input type="text" id="" name="color"><br><br>
<label for="lname">Nhập height:</label><br>
<input type="text" id="" name="height"><br><br>
<input type="submit" value="Submit">
</form> 