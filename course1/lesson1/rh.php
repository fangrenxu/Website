<?php

// 影视数组:二维数组
$movies = ['情书','天空之城','龙猫'];


// 栏目数组:一维数组
$navs = [
    'gc'=>'国产好剧',   //gc.php
    'om'=>'欧美猛片',   //om.php
    'rh'=>'日韩新片'    //rh.php
];

$copyright = 'php中文网';//版权信息
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../static/css/style.css">
    <title><?php echo $navs['gc'] ?></title>
</head>
<body>

<!--头部导航-->
<div class="header">
    <ul class="nav">
        <li><a href="index.php">首页</a></li>
        <?php foreach ($navs as $key=>$nav):  ?>
            <li><a href="<?php echo $key.'.php' ?>"><?php echo $nav ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>

<!--日韩新片-->
<h2><?php echo $navs['rh'] ?></h2>
<img src="../../course1/static/images/illust_87492684_20210206_014025.jpg" alt="" width="300">
<ol>
    <?php foreach ($movies as $movie): ?>
        <li><a href=""><?php echo $movie ?></a></li>
    <?php endforeach; ?>
</ol>

<!--底部版权-->
<div class="footer">
    <p class="copyright"><?php echo $copyright; ?>&copy; 版权所有，违反必究</p>
</div>
</body>
</html>
