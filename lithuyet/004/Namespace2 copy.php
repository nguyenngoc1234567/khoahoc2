<?php
 include 'DongHa/Tam.php';
 include 'GioLinh/Tam.php';

 use DongHa\Tam;
 use GioLinh\Tam as TamGioLinh;

 $tam = new Tam();
 $tam2 = new TamGioLinh();

 echo '<br>';
 print_r($tam);
 echo '<br>';

 print_r($tam2);
 die();