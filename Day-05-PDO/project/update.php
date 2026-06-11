<?php

require 'db.php';

$id = 1;
$newName = "Updated Abhishek";

$sql = "
UPDATE users
SET name = :name
WHERE id = :id
";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    'id' => $id,
    'name' => $newName
]);

echo "User updated";