<?php
 define ("SLOW",1);
 define ("MEDIUM",2);
 define ("FAST",3) ;

class Fan{
    // thuoc tinh
    public $speed = SLOW;
    public $on = false;
    public $radius = 0;
    public $color  = '';
    // phuong thuc 
    public function __construct(){

    }
    public function getSpeed(){
        return $this-> speed;

    }
    public function getOn(){
        return $this-> on;

    }
    public function getRadius(){
        return $this-> radius;

    }
    public function getColor(){
        return $this-> color;

    }
    public function setOn($ts_on){
        $this->on = $ts_on;
    }
    public function setRadius($ts_Radius){
        $this->radius = $ts_Radius;

    }
    public function setColor($ts_color){
        $this->color = $ts_color;

    }
    public function setSpeed($ts_Speed){
        $this->speed = $ts_Speed;

    }
    public function  toString(){
        if($this-> getOn()){
            return "quạt đang bật:" . "<br>" ."tốc độ: ".  $this->getSpeed(). "<br>". "màu sắc: " . $this->getColor() ."<br>". "bán kính: " . $this->getRadius();

}else {
    return "quạt đã tắt:" . "<br>" . "màu sắc: " . $this->getColor() ."<br>" . "bán kính: " . $this->getRadius();
}
        
   }
}
$fan1 = new Fan();

$fan1 -> getOn();
$fan1 -> getRadius();
$fan1 -> getSpeed();
$fan1 -> getColor();
$fan1 -> setOn(true);
$fan1 -> setRadius(10);
$fan1 -> setColor('red');
$fan1 -> setSpeed('SLOW');
echo  $fan1 -> toString();



