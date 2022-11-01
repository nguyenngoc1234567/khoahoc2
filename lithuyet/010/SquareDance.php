<?php
 class Dancer{
    public $name='';
    public $gender='';
    public function __construct ($name,$gender){
        $this->name = $name;
        $this->gender = $gender;
    }
}

$qNam=new SplQueue();
$qNam->enqueue(new Dancer('toan',true));
$qNam->enqueue(new Dancer('turong',true));
$qNam->enqueue(new Dancer('ngoc',true));



$qNu=new SplQueue();
$qNu->enqueue(new Dancer('thao tam',false));
$qNu->enqueue(new Dancer('huyen',false));


$qNam->rewind();
$qNu->rewind();

$pairs = [];
$namwaiting =[];
$nuwaiting =[];
while($qNam->valid()||$qNu->valid()){
    if($qNam->valid() && $qNu->valid()){
         $pairs[]=[
            'nam'=>$qNam->current(),
            'nu'=>$qNu->current(),
         ]; 
         $qNam->next();
         $qNu->next();

    }elseif( $qNam->valid()){
         $namwaiting[]=$qNam->current();
         $qNam->next();
    }elseif($qNu->$qNu->valid()){
        $nuwaiting[]=$qNu->current();
         $qNu->next();

    }
}
echo '<pre>';
print_r($pairs);
print_r($namwaiting);
print_r($nuwaiting);
echo'</pre>';

