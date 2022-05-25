<?php

// Kode : Dot Operator (Menggabungkan Kata)
$nama = "Kuskus Developer";
echo "Nama Anda: ". $nama . PHP_EOL;
echo "Nilai Anda: ". 100 .  PHP_EOL;

// Konversi Type Data
$ValueString = (string)100;
var_dump($ValueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valuefloat = (float)"100.5";
var_dump($valuefloat);

// mengakses karakter
$username = "pup";

echo $username[0] . PHP_EOL;
echo $username[1] . PHP_EOL;
echo $username[2] . PHP_EOL;

// Variabel Parsing
$kuskus = "Kuskus";
echo "Hello $kuskus" . PHP_EOL;

// Curly Brace
$kuskus = "Kusku";
echo "Hello $kuskus" . PHP_EOL;
echo "Hello {$kuskus}s developer" . PHP_EOL;


?>