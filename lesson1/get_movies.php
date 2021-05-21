<?php

//获取当前要显示的页数
$page = intval($_GET['p']);
// 连接数据库
$pdo = new PDO('mysql:host=127.0.0.1;dbname=php','root','admin');

//每页显示5条
$num = 5;

//获取总页数
$sql = "SELECT CEIL(COUNT(*)/{$num}) FROM movies";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$pages = $stmt->fetchColumn(0);

//偏移量 = 当前显示数量 * （当前页码 - 1）
$offset = $num * ($pages - 1);

$sql = "SELECT `mov_id`,`name`,`detail` FROM `movies` LIMIT {$num} OFFSET {$offset}";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);//二维数组

//将查询的结果集转为JSON字符串返回到前端去
echo json_encode([$pages,$result]);
