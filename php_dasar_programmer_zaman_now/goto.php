<?php

// Goto

$a = 1;

while (true) {
   echo "Perulangan While Ke $a" . PHP_EOL;
   $a++;

   if($a > 10){

    goto end;

   }
}

end:
echo "Sudah Terpenuhi" . "\n";

goto cetak_asik;
echo "Echo Ini Terskip";


cetak_asik:
echo "Asik Banget Sih";



?>