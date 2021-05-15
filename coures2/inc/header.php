<?php
// 1. 连接数据库
require 'connect.php';

// 2. 获取影视剧的信息
$sql = 'SELECT * FROM `movies`';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$movies = $stmt->fetchAll(PDO::FETCH_ASSOC);

// 3.获取栏目信息
$sql = 'SELECT * FROM `category`';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$cates = $stmt->fetchAll(PDO::FETCH_ASSOC);

// 4. 网站的配置信息
$sql = 'SELECT * FROM `system` LIMIT 1';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$system = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="static/css/style.css">
<!--    //网站描述-->
    <meta name="description" content="<?php echo $system['desc'] ?>">
    <meta name="keywords" content="<?php echo $system['key'] ?>">
    <title><?php echo $system[0]['title'] ?></title>
</head>
<body>

<!--头部导航-->
<div class="header">
    <ul class="nav">
        <li><a href="index.php">首页</a></li>
        <?php foreach ($cates as $cate):  ?>
<!--        list.php：就是列表页的模板-->
            <li><a href="list.php?cate_id=<?php echo $cate['cate_id']?>"><?php echo $cate['alias'] ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>
