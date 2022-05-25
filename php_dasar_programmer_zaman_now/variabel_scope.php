<?php

   $globalscope = "Kukus"; // Global Scope

   function Sayhello() {

    $localscope = "kukus"; // Local Scope

       global $globalscope; // Agar Tidak Error (Global Keyword)
       echo $globalscope . PHP_EOL; // Error
       echo $GLOBALS["globalscope"];


   }

   Sayhello();



   function Tambahin () {

 static $angka = 1; // Static Sccope

 echo "Jumlah = $angka" . PHP_EOL;

 $angka++;

   }

   Tambahin();
   Tambahin();


?>