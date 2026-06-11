<?php
    try {
        $dsn = "pgsql:host=localhost;dbname=gfg";
        $user = getenv('DB_USER');
        $password = getenv('DB_PASSWORD');
        $pdo = new PDO($dsn, $user, $password);
        echo "Database Connected successfully";
        echo "\n";
    }
    catch (PDOException $e) {
         echo "Error!: " . $e->getMessage() . "\n";
         die();
     }
?>