<?php

  $name = "Faiz";

  $otherName = &$name; // Reference
  $otherName = "Kuskus";

  echo $name . PHP_EOL;




  function Tambah (int &$value) {

    $value++;

  }

  $angka = 1;
  Tambah($angka);
 
  echo $angka . PHP_EOL;



  

?>