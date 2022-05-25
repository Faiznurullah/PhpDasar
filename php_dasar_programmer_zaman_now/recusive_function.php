<?php

 // Rumus Faktorial Menggunakan Perulangan For
 function Factorial (int $values) : int {

    $total = 1;


    for ($i=1; $i <= $values; $i++) { 

        $total *= $i;

    }

    return $total;

 }

 var_dump(Factorial(5));



echo "\n";



// Menggunakan Recusive Function
 function Factorial_2 (int $angka) : int {

if($angka == 1){

    return 1;

}else{

    return $angka * Factorial_2($angka - 1);


}

 }

 var_dump(Factorial_2(5));




?>