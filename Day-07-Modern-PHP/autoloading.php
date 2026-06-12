<?php
// Autoloading is a mechanism that loads classes automatically without using require or include.
spl_autoload_register(function ($className) {
    $file = __DIR__ . '/classes/' . $className . '.php';
    
    if (file_exists($file)) {
        require_once $file;
    }
});

$user = new User();  // Automatically loads classes/User.php

// In laravel we use something like that

// composer.json
// {
//     "autoload": {
//         "psr-4": {
//             "App\\": "src/"
//         }
//     }
// }


