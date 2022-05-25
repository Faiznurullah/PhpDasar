<?php

  // Simple Function

  function KatakanPeta() {

     echo "Cetak Peta" . PHP_EOL;

  }


  $benar =  true;

  if($benar){

     function CetakSeymun(){

        echo "Cetak Senyum" . PHP_EOL;

     }

     

  }else{


    echo "Gagal Cetak Senyum" . PHP_EOL;


  }



  // Tempat Manggil Function
 KatakanPeta(); 
 CetakSeymun();
  
  


?>