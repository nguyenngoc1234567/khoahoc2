<?php
 include 'DongHa/Tam.php';
 include 'GioLinh/Tam.php';

  $tam_1 = new DongHa\Tam();
  $tam_2 = new GioLinh\Tam();
  echo '<pre>';
  print_r($tam_1);
  print_r($tam_2);
  die();