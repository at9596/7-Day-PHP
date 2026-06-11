<?php

require 'db.php';

$name = "Abhishek";
$email = "abhi@test.com";

$sql = "
INSERT INTO users(name, email)
VALUES(:name, :email)
";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    'name' => $name,
    'email' => $email
]);

echo "User inserted";