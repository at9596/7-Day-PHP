<?php

require 'db.php';

$stmt = $pdo->query("SELECT * FROM users");

$users = $stmt->fetchAll();

print_r($users);