<?php

$a = 1;

  while ($a <= 10) {
     echo "Perulangan While Ke $a" . PHP_EOL;
     $a++;
  }


 // Syntax Alternatif
 
 $b = 1;
 
while ($b <= 10) :
 echo "Syntax Alternatif Ke $b" . PHP_EOL;   
 $b++;
endwhile;



?>