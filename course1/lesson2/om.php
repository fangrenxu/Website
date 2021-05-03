<!--加载被分离出去的公共头部-->
<?php include __DIR__.'/inc/header.php' ?>

<!--欧美猛片-->
<h2><?php echo $navs['om'] ?></h2>
<img src="../../course1/static/images/illust_67963569_20210204_014110.jpg" alt="" width="300">
<ol>
    <?php foreach ($movies[1] as $movie): ?>
        <li><a href=""><?php echo $movie ?></a></li>
    <?php endforeach; ?>
</ol>

<!--加载被分离出去的公共底部-->
<?php include __DIR__.'/inc/footer.php' ?>
