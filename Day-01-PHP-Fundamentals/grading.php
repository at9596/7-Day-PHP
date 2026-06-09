<?php

$marks = 85;

switch (true) {
    case ($marks >= 90):
        $grade = "A+";
        break;

    case ($marks >= 80):
        $grade = "A";
        break;

    case ($marks >= 70):
        $grade = "B";
        break;

    case ($marks >= 60):
        $grade = "C";
        break;

    case ($marks >= 50):
        $grade = "D";
        break;

    default:
        $grade = "F";
}

echo "Marks: " . $marks . "\n";
echo "Grade: " . $grade . "\n";

?>