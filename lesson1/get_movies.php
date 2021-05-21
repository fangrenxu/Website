<?php

//获取当前要显示的页数
$page = intval($_GET['p']);
// 连接数据库
$pdo = new PDO('mysql:host=127.0.0.1;dbname=php','root','admin');

//每页显示5条
$num = 5;

