<?php
class QuadraticEquation{

    //thuộc tính
    public $a = 0;
    public $b = 0;
    public $c = 0;
    public function __construct($ts_a, $ts_b, $ts_c)
    {
        $this->a = (int)$ts_a;
        $this->b = (int)$ts_b;
        $this->c = (int)$ts_c;
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
        return ($this->b*$this->b) - (4*$this->a*$this->c) ;
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