<?php

// if else

 $nilai = 80;
 $kehadiran = 80;

 if ($nilai >= 70 and $kehadiran >= 70) {

     echo "Selamat Anda lulus dengan memuaskan" . PHP_EOL;

 }  else {

  echo "Anda Belum Lulus" . PHP_EOL;

 }


 // if elseif else

 $ujian = 95;

 if ($ujian >= 90) {

    echo "Nilai Kamu A" . PHP_EOL;

 }else if ($ujian >= 80) {

    echo "Nilai Kamu B" . PHP_EOL;

 }else {

    echo "Nilai Kamu C" . PHP_EOL;

 }

 // syntax alternatif

 $ujian = 70;

 if ($ujian >= 90) :

    echo "Nilai Kamu A" . PHP_EOL;

 elseif ($ujian >= 80) :

    echo "Nilai Kamu B" . PHP_EOL;

 else :

    echo "Nilai Kamu C" . PHP_EOL;

 endif;
 


?>