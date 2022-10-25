<?php
 if ( $_SERVER['REQUEST_METHOD']== 'POST') {
    // in du lieu ra
    // luu vao bo nho , khai bao bien
    $x = $_REQUEST['x'];
    $y = $_REQUEST['y'];
    $xSpeed = $_REQUEST['xSpeed'];
    $ySpeed = $_REQUEST['ySpeed'];

class Point {
    public $x;
    public $y;
    public function __construct($x,$y) {
    $this ->x =$x;
    $this ->y =$y;
    }
    public function getX(){
        return $this->x ;
    }
    public function getY(){
        return $this->y ;
    }
    public function setX($x){
        $this->x=$x;
    }
    public function setY($y){
        $this->y=$y;
    }
    public function setXY($ts_xy){
        $this->x*$this->y=$ts_xy;
    }
    public function getXY(){
        return [$this->x*$this->y];
    }
    public function toString(){
        echo 'đây là mảng point';
    }
    }

    class MoveablePoint extends Point{
        public $xSpeed;
        public $ySpeed;
        public function __construct($x,$y,$xSpeed,$ySpeed){
            parent::__construct($x,$y);
            $this->xSpeed=$xSpeed;
            $this->ySpeed=$ySpeed;
        }
        public function getXSpeed(){
            return $this->x;
        }
        public function setXSpeed($xSpeed){
            $this->x=$xSpeed;
        }
        public function getYSpeed(){
            return $this->y;
        }
        public function setYSpeed($ySpeed){
            $this->y=$ySpeed;
        }
        public function getSpeed():array{
            return [$this->xSpeed*$this->ySpeed];
        }
        public function move(){
            return $this->xSpeed;
        }
        public function toString(){
            echo  'đây là point';
        }
    }
    // $MoveablePoint = new MoveablePoint($x,$y,$xSpeed,$ySpeed);
    // print_r($MoveablePoint->getSpeed());
    $MoveablePoint = new MoveablePoint($x,$y,$xSpeed,$ySpeed);
    echo '<pre>';   
    print_r($MoveablePoint);
    echo '</pre>';   

}
    ?>
    <form action="" method="post">
<label for="fname">Nhập x:</label><br>
<input type="text" id="" name="x"><br>
<label for="lname">y:</label><br>
<input type="text" id="" name="y"><br><br>
<label for="lname">Nhập xSpeed:</label><br>
<input type="text" id="" name="xSpeed"><br><br>
<label for="lname">Nhập ySpeed:</label><br>
<input type="text" id="" name="ySpeed"><br><br>
<input type="submit" value="Submit">
</form> 
