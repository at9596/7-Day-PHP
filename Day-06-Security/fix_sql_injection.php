<?php

try {
    $dsn = "pgsql:host=localhost;dbname=gfg";
    $user = getenv('DB_USER');
    $password = getenv('DB_PASSWORD');
    $pdo = new PDO($dsn, $user, $password);

    // Get user input
    $username = $_GET['username'];

    // SECURE: Using prepared statement with placeholder
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$username]);  // Input is treated as DATA, not SQL
    
    $users = $stmt->fetchAll();

    echo "Database Connected successfully\n";
    echo "Found " . count($users) . " users\n";

} catch (PDOException $e) {
    echo "Error!: " . $e->getMessage();
}
?>