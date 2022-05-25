<?php

$data = [1, 2, 3, 4, 5];
 $Datakali = array_map(fn(int $value) => $value * 10, $data);
 var_dump($Datakali);

 rsort($data);
 var_dump($data);

 var_dump(array_keys($data));
 var_dump(array_values($data));


?>