<!--加载被分离出去的公共头部-->
<?php include __DIR__.'/inc/header.php' ?>

<!--国产原创-->
<h2><?php echo $navs['gc'] ?></h2>
<img src="../../course1/static/images/illust_66989078_20210204_014736.jpg" alt="" width="300">
<ol>
    <?php foreach ($movies[0] as $movie): ?>
        <li><a href=""><?php echo $movie ?></a></li>
    <?php endforeach; ?>
</ol>

<!--加载被分离出去的公共底部-->
<?php include __DIR__.'/inc/footer.php' ?>