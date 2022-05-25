<?php

// Contoh Break
$a = 1;

while (true) {
   echo "Perulangan While Ke $a" . PHP_EOL;
   $a++;

   if($a > 10){

    break;

   }
}


PHP_EOL;

// Contoh Continue
$i = 1;

for (  ; $i < 100; $i++) {

   if($i %2 == 0){
   continue;
   }


   echo "Perulangan Anti Bilangan Genap, Bilangan Ganjil Ke $i" . PHP_EOL;

}


?>