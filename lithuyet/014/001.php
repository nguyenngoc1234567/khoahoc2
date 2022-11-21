<?php
// $str = "đang ăn tối";
// echo "Nam nói\"Cậu ấy $str\" ";

// echo crc32 ('freetuts.net');

// echo stripslashes("Mot so ham 'xu ly chuoi' trong PHP");
// Kết quả Mot so ham 'xu ly chuoi' trong PHP
//  $arr = [
//       0 => ' toi',
//       1 => ' hoc',
//       2 => ' o',

//  ];

//  print_r(implode($arr));

// $bien_chuoi = "name";
// print($bien_chuoi);
// print "<br/>";
// $bien_chuoi_hang = 'Chuỗi $bien_chuoi sẽ không được in!\\n';
// print($bien_chuoi_hang);
// print "<br/>";
// $bien_chuoi_hang = "chuoi $bien_chuoi  sẽ được in !\\n";
// echo ($bien_chuoi_hang);
//  $string = 'a';
//  $regex = '/[a-z]/';
//  if(preg_match($regex,$string)){
//     echo ' khớp';

//  }else{
//     echo ' không ';
//  }

// Partern kiểm tra trong subject có tồn tại chuỗi abc không

// $pattern = '/abc/';
// $subject = 'abc';

// if (preg_match($pattern, $subject)) {

//     echo 'Chuỗi regex so khớp';

// }

// function isFirstLetterUpperCase($str)
// {
//     $regexp = '/^[A-Z]/';
//     if (preg_match($regexp, $str)) {
//         echo("String's first character is uppercase");
//     } else {
//         echo("String's first character is not uppercase");
//     }
// }

// isFirstLetterUpperCase('Codegym');
// echo "<br>";
// isFirstLetterUpperCase('cdegym');

// $string = 'toi la "sieu nhan"';
// $string = "teach's day";
// echo $string;

// $ip = '197.196.0.1';
// echo '<pre>';
// print_r($ip());
// tach chuoi nay sang mang, phan tach boi dau .
// echo '<pre>';
// print_r(explode('.', '197.196.0.1', ));

// 1. Chuyen  1. Chuyen chuoi Toi,yeu,lap,trinh sang mang
// ['Toi','yeu','lap',trinh]
////bài 1Chuyen chuoi Toi,yeu,lap,trinh sang mang
    // ['Toi','yeu','lap',trinh]
    // - Goi y: Tach chuoi thanh mang PHP
// $chuyendoi = 'Toi,yeu,lap,trinh';
// $arr = explode(",", $chuyendoi);
// echo "<pre>";
// print_r($arr);
// echo "</pre>";

// //bài 2Chuyen mang ['Toi','yeu','lap',trinh] sang chuoi Toi yeu lap trinh
    // - Goi y: Chuyen mang thanh chuoi PHP
// $arr =['Toi','yeu','lap','trinh'] ;
// $chuoi = implode( ' ', $arr);
// echo $chuoi;
// echo '<br>';

// //bài 3
// $chuoi = 'Toi yeu lap trinh';
// echo str_replace('lap trinh ','CodeGym','Toi yeu lap trinh');
// TaiTam99@gmail.com12452

class Staff
{
    private $name;
    private $age;
 
   function __construct($name, $age)

   {
        $this->name = $name;
        $this->age = $age;
   }

   function showInfo()

   {
       echo 'Name: ' . $this->name . ' | ';
       echo 'Age: ' . $this->age;
   }
}

$staff = new Staff('Nguyễn Văn Anh', 25);
$staff->showInfo();