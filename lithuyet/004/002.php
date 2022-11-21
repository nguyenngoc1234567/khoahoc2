<?php 
class StopWatch {
    public static $startTime = 0;
    public static $endTime = 10; 
    public $color = 'red'; 

     public static function getendTime(){
        
       echo __METHOD__;
    }
    public static function getstartTime(){
       
        echo self::$startTime ;
     

    } 
}

// truy xuat thuoc tinh
echo StopWatch::$startTime ;
echo "<br>";
echo StopWatch::$endTime ;
// truy cap phuong thuc 
StopWatch::getendTime();
echo '<br>';
StopWatch::getstartTime();

