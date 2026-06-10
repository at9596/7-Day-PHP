<?php
 $array = [1,2,3,4];
 $new_array = fn($a=1, $b=1) => $a + $b;
 echo $new_array(3,4);
 echo "\n";
 echo array_sum($array);
 echo "\n";