<?php 
class StopWatch {
    private $startTime = 0;
    private $endTime = 10; 

     public function getendTime(){
        return $this -> endTime;  
       
    }
    public function getstartTime(){
        return $this -> startTime; 
       
    } 
}

// khoi tao doi tuog
$objStopWatch = new StopWatch();

        
        // // truy cap gia tri thuoc tinh
        // echo  $objStopWatch->startTime ;
        // echo '<br>';
        // echo  $objStopWatch->endTime ;
    // truy cap phuong thuc 
     echo $objStopWatch ->getstartTime ();
     echo '<br>';
     echo  $objStopWatch-> getendTime ();

