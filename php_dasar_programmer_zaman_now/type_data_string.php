<?php
// single quote ''
// double quote ""
// \n is space
// \t is TAB

echo 'Name: Programmer'; 
echo "Name: Programmer"; 
echo "\n";

echo "Faiz\tNurullah";
echo "\n";

echo <<<MULTI_LINE

Multi Line
Teks
Panjang

MULTI_LINE;

echo <<<'MULTI_LINE'

Multi Line
Teks
"Panjang"

MULTI_LINE;

?>