<?php

try {
    $dsn = "pgsql:host=localhost;dbname=gfg";

    $user = getenv('DB_USER');
    $password = getenv('DB_PASSWORD');

    $pdo = new PDO($dsn, $user, $password);


    $sql = "
        CREATE TABLE IF NOT EXISTS users (
            id SERIAL PRIMARY KEY,
            name VARCHAR(100),
            email VARCHAR(100)
        )
    ";

    $pdo->exec($sql);

    echo "Database Connected successfully\n";
    echo "Table created successfully\n";

} catch (PDOException $e) {
    echo "Error!: " . $e->getMessage();
}