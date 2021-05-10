<?php

$db = [
    'type' => 'mysql',
    'host' => '127.0.0.1',
    'dbname' => 'test',
    'username' => 'root',
    'password' => 'root'
];

$dsn = "{$db['type']}:host={$db['host']};dbname={$db['dbname']}";

$pdo = new PDO( $dsn,$db['username'],$db['password']);

var_dump($pdo);
?>