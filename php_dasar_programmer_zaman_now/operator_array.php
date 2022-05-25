<?php

/*



*/

$NamaDepan = [
    "namadepan" => "kukus"
];

$NamaBelakang = [
    "namabelakang" => "developer"
];

$FUllName = $NamaDepan + $NamaBelakang;


var_dump($FUllName);
var_dump($NamaDepan == $NamaBelakang);



?>