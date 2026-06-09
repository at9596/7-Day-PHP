<?php

    if (isset($_POST['calculate'])) {  
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];

        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;

            case 'subtract':
                $result = $num1 - $num2;
                break;

            case 'multiply':
                $result = $num1 * $num2;
                break;

            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Cannot divide by zero!";
                }
                break;

            default:
                $result = "Invalid operation!";
        }

        echo "<h3>Result: $result</h3>";
    }
    ?>