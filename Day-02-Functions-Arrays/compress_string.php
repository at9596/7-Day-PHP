<?php

$str = "aaabbccccd";

$result = "";
$count = 1;

for ($i = 0; $i < strlen($str); $i++) {

    if (
        $i < strlen($str) - 1 &&
        $str[$i] == $str[$i + 1]
    ) {
        $count++;
    } else {
        $result .= $str[$i] . $count;
        $count = 1;
    }
}

echo $result;