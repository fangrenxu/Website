<?php
//查询：fetch + while

// 1. 连接数据库
require 'inc/connect.php';

// 2. 创建SQL语句模板
$sql = 'SELECT * FROM `movies` WHERE `cate_id` = :cate_id';

// 3. 创建SQL语句对象：预处理对象 PDOStatment
$stmt = $pdo->prepare($sql);

// 4. 将变量绑定到SQL语句的模板上
$cate_id = 1;
$stmt->bindParam('cate_id',$cate_id,PDO::PARAM_INT);

// 5. 执行SQL语句
$stmt->execute();

// 6. 遍历
//fetch():从结果集中
while($movie = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo '<pre>' . print_r($movie,true);
}

// 7. 关闭连接
$pdo = null;