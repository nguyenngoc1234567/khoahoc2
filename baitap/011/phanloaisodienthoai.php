<?php
// $string = '0943612567,0788829292,092827262, 07656564';
// $phones = explode(',',$string);
// $vinas      = [];
// $viettels   = [];
// $mobis      = [];
// foreach ($phones as $phone) {
//     $checkPhome = substr($phone,0,3);
//     //kiem tra vinas
//     if( $checkPhome == '094' || $checkPhome == '091' ){
//         $vinas[] = $phone;
//     }
//     //kiem tra vietel
//     if( $checkPhome == '097'|| $checkPhome == '097'  ){
//         $vinas[] = $phone;
//     }
//     //kiem tra mobis
//     if( $checkPhome == '092'){
//         $mobis[] = $phone;
//     }
// }
// echo '<pre>';
// echo 'vina';
// print_r($vinas);
// echo '<hr>';
// print_r($viettels);
// print_r($mobis);
// die();

   


class Main{
    public SplDoublyLinkedList $viettel;
    public SplDoublyLinkedList $mobifone;
    public SplDoublyLinkedList $vinaphone;
    public array $data;
    public function __construct(){
        $this->viettel = new SplDoublyLinkedList();
        $this->mobifone = new SplDoublyLinkedList();
        $this->vinaphone = new SplDoublyLinkedList();
        $this->data = [];
    }
    public function filterTel($data){
       $this->data = explode(",", $data);
    }

    public function getViettel(){
        $patternViettel = "/^086|^09[6-8]|^03[2-9]/";
        foreach ($this->data as $value) {
            if (preg_match($patternViettel, $value)) {
                $this->viettel->unshift($value);
            }
        }
        return $this->viettel;
    }
    public function getMobifone(){
        $patternMobi = "/^070|^089|^07[6-9]|^090|^093/";
        foreach ($this->data as $value) {
            if (preg_match($patternMobi, $value)) {
                $this->mobifone->unshift($value);
            }
        }
        return $this->mobifone;
    }
    public function getVinaphone(){
        $patternVina = "/^094|^091|^08[1-5]|^088/";
        foreach ($this->data as $value) {
            if (preg_match($patternVina, $value)) {
                $this->vinaphone->unshift($value);
            }
        }
        return $this->vinaphone;
    }
}   
$data = $_POST['input'];
$arr = "08624524,081523445,0861232,096098,08624524,
081523445,0861232,096098,09624524,081523445,
0861232,096098,08624524,097523445,0361232,036098";
$arr1 = "08624524,081523445,0861232,096098,08624524,
081523445,0861232,088098,091624524,094523445,
0861232,096098,08624524,093523445,0901232,089098";
$main = new Main();
$main->filterTel($data);
$main->getMobifone();
$main->getViettel();
$main->getVinaphone();  
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phân loại số điện thoại</title>
</head>
<body>
<h2>Kiểm tra nhà mạng đang dùng :</h2>
<form method="post">
    <table>
        <tr>
            <td>
                <textarea name="input" rows="1" cols="25"></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <button>Kiểm tra số điện thoại</button>
            </td>
        </tr>
    </table>
</form>
<table>
    <tr>
        <th>Viettel</th>
        <th>Mobifone</th>
        <th>Vinaphone</th>
    </tr>
    <td>
        <?php for ($main->viettel->rewind();
                   $main->viettel->valid();
                   $main->viettel->next()): ?>

            <?php echo $main->viettel->current() . "<br>" ?>
        <?php endfor; ?>
    </td>
    <td>
        <?php for ($main->mobifone->rewind();
                   $main->mobifone->valid();
                   $main->mobifone->next()): ?>
            <?php echo $main->mobifone->current() . "<br>" ?>
        <?php endfor; ?>
    </td>
    <td>
        <?php for ($main->vinaphone->rewind();
                   $main->vinaphone->valid();
                   $main->vinaphone->next()): ?>
            <?php echo $main->vinaphone->current() . "<br>" ?>
        <?php endfor; ?>
    </td>
</table>
</body>
</html>