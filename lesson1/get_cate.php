<?php
// 连接数据库
$pdo = new PDO('mysql:host=127.0.0.1;dbname=php','root','admin');

$stmt = $pdo->prepare('SELECT * FROM `category`');

$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

//php用json_encode()
echo json_encode($result);
