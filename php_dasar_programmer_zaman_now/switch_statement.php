<?php

$nilai = "A";

  switch ($nilai) {

     case "A":
     echo "Nilai Sangat Bagus" . PHP_EOL;
     break;

     case "B":
     echo "Nilai Bagus" . PHP_EOL;
     break;

     case "C":
     case "D":
     echo "Nilai Kurang Bagus" . PHP_EOL;
     break;

     default: 
     echo "Nilai Sangat Buruk";


  }



  // syntax alternatif

   $nilai_2 = "D";
  switch ($nilai_2) :

    case "A":
    echo "Nilai Sangat Bagus" . PHP_EOL;
    break;

    case "B":
    echo "Nilai Bagus" . PHP_EOL;
    break;

    case "C":
    case "D":
    echo "Nilai Kurang Bagus" . PHP_EOL;
    break;

    default: 
    echo "Nilai Sangat Buruk";

    endswitch;


?>