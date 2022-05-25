<?php

 $buah = ["Apel", "Blimbing", "Duren", "Jeruk"];

 for ($i = 0; $i < count($buah); $i++) {

    echo "Buah $buah[$i] Enak Sekali" . PHP_EOL;

 }

 echo "\n";

 // Foreach
 foreach ($buah as $buahan ) {
     echo "Buah $buahan enak sekali" . PHP_EOL;
 }

 echo "\n";


 $man = [

     "Nama" => "Rudy Tabudi",
     "Umur" => "18",
     "Gender" => "Pria"

 ];

 foreach ($man as $pria => $value) {
     echo PHP_EOL . "$pria : $value";
 }


?>