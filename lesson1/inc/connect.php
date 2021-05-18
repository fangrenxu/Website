<?php

$db = require 'database.php';

$dsn = "{$db['type']}:host={$db['host']};dbname={$db['dbname']}";

try {
    $pdo = new PDO($dsn, $db['username'], $db['password']);
} catch (PDOException $e) {
    die('Connection Failed' . $e->getMessage());
}
