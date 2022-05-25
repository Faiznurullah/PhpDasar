<?php
 
  function jumlah (int $pertama, int $kedua) {

    return $pertama + $kedua;

  }

  $hasil = jumlah(20, 10);
  var_dump($hasil);

// Types Valid

function jumlah2 (int $pertama, int $kedua) : int {

    return $pertama + $kedua;

  }

  $hasil = jumlah2(20, 10);
  var_dump($hasil);



?>