<?php

  // function argument is parameter

  function Panggilnama($nama){

    echo "Haloo $nama" . PHP_EOL;

  }

  Panggilnama("Budi");
  Panggilnama("Jerry");


  echo "\n";


  // Default Argument Value ` namafungsi(parameter = default)

  function PanggilKendaraan($namaken = "Mobil"){

    echo "Haloo $namaken" . PHP_EOL;

  }
  PanggilKendaraan("Motor");
  PanggilKendaraan();

  echo "\n";

  // Types Valid

  function Penjumlahan(int $angkasatu, int $angkadua){

    $jumlah = $angkasatu + $angkadua;
    echo "$angkasatu + $angkadua = $jumlah" . PHP_EOL;

  }

  Penjumlahan("100", "50");
  Penjumlahan(15, 10);
  Penjumlahan(true, false);

  echo "\n";


 // variabel-lenght argument list

 function Jumlahsemua(...$nilai){

    $jumlahnilai = 0;

    foreach ($nilai as $keynilai) {

        $jumlahnilai += $keynilai;
        
    }

    echo "Total Nilai " . implode(" + ", $nilai) . " = $jumlahnilai " . PHP_EOL;

 }

 Jumlahsemua(1, 2, 3);
 Jumlahsemua(...[10, 20, 30, 40, 50]);


?>