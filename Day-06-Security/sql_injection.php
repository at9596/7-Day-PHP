<?php

try {
    $dsn = "pgsql:host=localhost;dbname=gfg";
    $user = getenv('DB_USER');
    $password = getenv('DB_PASSWORD');
    $pdo = new PDO($dsn, $user, $password);

    // VULNERABLE: Getting user input (e.g., from $_GET or $_POST)
    $username = $_GET['username'];  // HACKER CAN CONTROL THIS!
    
    // VULNERABLE: Directly embedding user input
    $sql = "SELECT * FROM users WHERE username = '$username'";
    
    $pdo->exec($sql);  // This executes the malicious query!

    echo "Database Connected successfully\n";

} catch (PDOException $e) {
    echo "Error!: " . $e->getMessage();
}
// sql_injection:
// It is a security threat. It allows hackers to execute some malicious code into user input. It might give several losses such as: unwanted updation 
// like password update, unwanted loss like table drop.
