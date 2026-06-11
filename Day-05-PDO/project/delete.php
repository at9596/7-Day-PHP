<?php

require 'db.php';

$id = 1;

$stmt = $pdo->prepare(
    "DELETE FROM users WHERE id = :id"
);

$stmt->execute([
    'id' => $id
]);

echo "User deleted";