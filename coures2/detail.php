<?php
//加载被分离出去的公共头部
include __DIR__ . '/inc/header.php';
//获取当前要访问的影视剧 id
$mov_id = intval($_GET['mov_id']);

foreach ($movies as $movie) {
    if ($movie['mov_id'] === $mov_id) {
        //detail.php：详情页模板文件
        echo "<h3>{$movie['name']}</h3>";
        echo '<img src="static/images/'.$movie['image'].'" width="300">';
        echo "<p style='text-indent: 2em'>{$movie['detail']}</p>";
    }
}

//加载被分离出去的公共底部
include __DIR__ . '/inc/footer.php';


