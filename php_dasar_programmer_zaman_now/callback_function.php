<?php

 function Sayhello (string $name, callable $filter) {

     $finalName = call_user_func($filter, $name);
     echo "Hallo $finalName" . PHP_EOL;

 }

 Sayhello("kuskus", "strtoupprer");
 Sayhello("kuskus", "strtolower");
 Sayhello("kuskus", fn($name) => strtoupprer($name));
 Sayhello("kuskus", function ($name){ return strtoupprer($name); });



?>