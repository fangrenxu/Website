<!--加载被分离出去的公共头部-->
<?php include __DIR__.'/inc/header.php' ?>
<!--日韩新片-->
<h2><?php echo $navs['rh'] ?></h2>
<img src="../../course1/static/images/illust_87492684_20210206_014025.jpg" alt="" width="300">
<ol>
    <?php foreach ($movies[2] as $movie): ?>
        <li><a href=""><?php echo $movie ?></a></li>
    <?php endforeach; ?>
</ol>

<!--加载被分离出去的公共底部-->
<?php include __DIR__.'/inc/footer.php' ?>