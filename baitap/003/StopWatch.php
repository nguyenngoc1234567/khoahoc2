<?php
class StopWatch
{
    //thuoc tinh
    public $startTime;
    public $endTime;
    //phuong thuc 

    public function setstartTime($startTime){
        $this -> startTime = $startTime;
    }
    public function getstartTime(){
        return $this -> startTime;   
    }
    public function setstsendTime($ts_endTime){
        $this -> ts_endTime = $ts_endTime;
    }
    public function getstsendTime(){
        return $this -> ts_endTime;   
    }
    public function start(){
        $this->startTime=microtime(true);
    }
    public function stop(){
        $this->endTime=microtime(true);
    }
    public function getElapsedTime(){
        echo $this->endTime - $this->startTime;
    }
};
$time=new Stopwatch();
$time->start();
usleep(1000000);
$time->stop();
$time->getElapsedTime();
