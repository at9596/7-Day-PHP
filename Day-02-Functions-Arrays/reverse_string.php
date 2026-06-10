<?php
$str = "hello";
$reversed = "";

for ($i = strlen($str) - 1; $i >= 0; $i--) {
    $reversed .= $str[$i];
}

echo $reversed;
echo "\n";