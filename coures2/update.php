<?php

// 1. 连接数据库
require 'inc/connect.php';
// 2. 创建SQL语句模板
$sql = 'UPDATE `category` SET `name` = :name,`alias`= :alias WHERE `cate_id`=:cate_id';

// 3. 创建SQL语句对象：预处理对象 PDOStatment
$stmt = $pdo->prepare($sql);

// 4. 将变量绑定到SQL语句的模板上
$name = 'xjj';
$alias = '小姐姐';
$cate_id = 4;
$stmt->bindParam('name',$name,PDO::PARAM_STR);
$stmt->bindParam('alias',$alias,PDO::PARAM_STR);
$stmt->bindParam('cate_id',$cate_id,PDO::PARAM_INT);
// 5. 执行SQL语句

if($stmt->execute()){
    if ($stmt->rowCount() > 0) {//返回的表中受影响的记录数量
        echo '成功的更新了'. $stmt->rowCount() . '条记录';
    } else {
        die('<pre>' . print_r($stmt->errorInfo(), true));
    }
}
// 6. 关闭连接
$pdo = null;