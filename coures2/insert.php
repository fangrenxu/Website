<?php

// 1. 连接数据库
require 'inc/connect.php';
// 2. 创建SQL语句模板
$sql = 'INSERT INTO `category` SET `name` = :name,`alias`= :alias';
// 3. 创建SQL语句对象：预处理对象 PDOStatment
$stmt = $pdo->prepare($sql);
// 4. 将变量绑定到SQL语句的模板上
$name = 'zn';
$alias = '宅男福利';
$stmt->bindParam('name',$name,PDO::PARAM_STR);
$stmt->bindParam('alias',$alias,PDO::PARAM_STR);
// 5. 执行SQL语句
if($stmt->execute()){
    if ($stmt->rowCount() > 0) {//返回的表中受影响的记录数量
        echo '成功的添加了'. $stmt->rowCount() . '条记录,主键：' . $pdo->lastInsertId();
    } else {
        die('<pre>' . print_r($stmt->errorInfo(), true));
    }
}
// 6. 关闭连接
$pdo = null;