<!--加载被分离出去的公共头部-->
<?php include __DIR__.'/inc/header.php' ?>
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

<!--加载被分离出去的公共底部-->
<?php include __DIR__.'/inc/footer.php' ?>