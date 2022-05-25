<?php

 function kukus () {

  echo "Cetak Kukus" . PHP_EOL;

 }


 function developer () {

    echo "Cetak developer" . PHP_EOL;
  
   }

 $namaFunction = "kukus";
 $namaFunction();

 $namaDeveloper = "developer";
 $namaDeveloper();

// Contoh

 function Sayhelo (string $name, $filter) {

    $finalName = $filter($name);
    echo "Hay, $finalName" . PHP_EOL;

 }

 Sayhelo("Kuskus", "strtoupper");
 Sayhelo("Kuskus", "strtolower");

?>