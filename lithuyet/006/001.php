<?php
class Animal{
    
    public function say(){
        echo 'say';
    }
}
class conMeo extends Animal {
    public function say(){
        echo'<br> meo meo';
    }
}
class conCho extends Animal {
    public function say(){
        echo'<br> go go';
    }
}
$conmeo = new conMeo();
$conmeo->say();
$concho = new conCho();
$concho->say();



