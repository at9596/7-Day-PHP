<?php
// Namespace is used for better management of file/folder structure.
// If we have two files with the same name (e.g., User.php), 
// we can easily segregate them using namespaces.

namespace A;

class User {
    public function __construct() {
        echo "User from namespace A";
        echo "\n";
    }
}

namespace B;

class User {
    public function __construct() {
        echo "User from namespace B";
        echo "\n";
    }
}

// Using the classes with fully qualified names
$userA = new \A\User();
$userB = new \B\User();