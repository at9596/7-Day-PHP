<?php

class InvalidAgeException extends Exception
{
}

function checkAge($age)
{
    if ($age < 18) {
        throw new InvalidAgeException("Age must be 18 or above."."\n");
    }

    return "Access Granted";
}

try {
    echo checkAge(16);
} catch (InvalidAgeException $e) {
    echo "Error: " . $e->getMessage();
}