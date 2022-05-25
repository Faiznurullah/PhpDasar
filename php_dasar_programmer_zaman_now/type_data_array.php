<?php

$values = array(1, 2, 3, 4, 5.5);

// Cek Data Array
var_dump($values);
echo "\n";

// Memanggil Array
echo $values[0];
echo "\n";

// Mengubah Nilai Array
$values[1] = 5;
echo $values[1];
echo "\n";


// Menjumlah Data Array
var_dump(count($values));
echo "\n";

// Menghapus Data Array
unset($values[0]);
var_dump($values);
echo "\n";

// Menambahkan Data Array Paling Belakang
$values[] = 6;
var_dump($values);
echo "\n";


$names = ['Kuskus', 'Developer'];
var_dump($names);
echo "\n";


// Array Sebagai Map Atau Array Assosiatif

$akun = array(

    "Id" => "1",
    "Nama" => "Kuskus Developer",
    "Password" => "Password123"

);

var_dump($akun);
echo "\n";


// Array Di Dalam Array

$akun_pes = [

    "Username" => "Kuskusdev",
    "Password" => "password123",
    "Alamat" => [
    
        "City" => "Cirebon",
        "Country" => "Indonesia"
        

    ]


];

var_dump($akun_pes);
echo "\n";
var_dump($akun_pes["Alamat"]["City"]);



?>