<?php

function divide($a, $b)
{
    if ($b == 0) {
        error_log("Division by zero attempted");
       

        return null;
    }

    return $a / $b;
}

divide(10, 0);