<?php

// 影视数组:二维数组
$movies = [
    0=>['倚天屠龙记','都挺好','如果可以这样爱'],
    1=>['复仇者联盟4','波西米亚狂想曲','艾丽塔'],
    2=>['情书','天空之城','龙猫']
];

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
    <title>首页</title>
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

<!--国产原创-->
<h2><?php echo $navs['gc'] ?></h2>
<ol>
    <?php foreach ($movies[0] as $movie): ?>
        <li><a href=""><?php echo $movie ?></a></li>
    <?php endforeach; ?>
</ol>
<!--欧美猛片-->
<h2><?php echo $navs['om'] ?></h2>
<ol>
    <?php foreach ($movies[1] as $movie): ?>
        <li><a href=""><?php echo $movie ?></a></li>
    <?php endforeach; ?>
</ol>
<!--日韩新片-->
<h2><?php echo $navs['rh'] ?></h2>
<ol>
    <?php foreach ($movies[2] as $movie): ?>
        <li><a href=""><?php echo $movie ?></a></li>
    <?php endforeach; ?>
</ol>
<!--底部版权-->
<div class="footer">
    <p class="copyright"><?php echo $copyright; ?>&copy; 版权所有，违反必究</p>
</div>
</body>
</html>
