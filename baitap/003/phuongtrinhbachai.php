<?php
if ( $_SERVER['REQUEST_METHOD']== 'POST') {
    $a = $_REQUEST['nhapsothunhat'];
    $b = $_REQUEST['nhapsothuhai'];
    $c = $_REQUEST['nhapsothuhai'];

class QuadraticEquation{

    //thuộc tính
    public $a = '';
    public $b = '';
    public $c = '';
    public function __construct($ts_a, $ts_b, $ts_c)
    {
        $this->a = $ts_a;
        $this->b = $ts_b;
        $this->c = $ts_c;
    }
    //phuong thuc 
    public function setA($a)
    {
        $this->a = $a;
    }
    public function getA()
    {
        return $this->a;
    }
    public function setB($b)
    {
        $this->b = $b;
    }
    public function getB()
    {
        return $this->b;
    }
    public function setC($c)
    {
        $this->c = $c;
    }
    public function getC()
    {
        return $this->c;
    }
    public function getDiscriminant(){
        return ($this->b*$this-> b) - 4*$this->a*$this->c ;
    }
    public function GetRoot1(){
        $delta = $this ->getDiscriminant();
        if($delta>0) {
            $r1 = (- $this ->b + sqrt ( $delta )) / (2 * $this ->a);
            $r2 = (- $this ->b - sqrt ( $delta )) / (2 * $this ->a);
            echo ("Phương trình có 2 nghiệm là: " . "x1 = " . $r1 . " và x2 = " . $r2);
        }
        else if($delta==0) {
            $r1 = (- $this ->b / (2 * $this ->a));
            echo "Phương trình có nghiệm kép: x1 = x2 = " . $r1;
        }
        else {
            echo "Phương trình vô nghiệm";
        }
    }
}
// khởi tạo đói tượng
$objQuadraticEquation = new QuadraticEquation(1,8,3);
$objQuadraticEquation->GetRoot1();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action=""method='post'>
<label for="">Nhập số thứ nhất</label><br>
  <input type="text"  name="nhapsothunhat" ><br>
  <label for="">Nhập số thứ hai :</label><br>
  <input type="text"  name="nhapsothuhai" ><br>
  <label for="">Nhập số thứ ba :</label><br>
  <input type="text"  name="nhapsothuhai" ><br>
  <input type="submit" value="Submit">
</form>
</body>
</html>