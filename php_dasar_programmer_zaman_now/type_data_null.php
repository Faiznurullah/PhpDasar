<?php

$nama = "Kuskus";
$nama = NULL;
$age = NULL;


echo $nama;
echo "\n";
echo $age;
echo "\n";
var_dump(is_null($nama));
echo "\n";


$contoh = "Contoh";
unset($contoh);
var_dump(isset($nama));
?>