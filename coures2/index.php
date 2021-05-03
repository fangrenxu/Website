<?php
//加载被分离出去的公共头部
include __DIR__ . '/inc/header.php';


foreach ($cates as $cate) {
    echo '<h2>' . $cate['alias'] . '</h2>';
    echo '<ol>';

    foreach ($movies as $movie) {
        if ($movie['cate_id'] === $cate['cate_id']) {
            //detail.php：详情页模板文件
            echo '<li><a href="detail.php?mov_id='.$movie['mov_id'].'">'.$movie['name'].'</a></li>';
        }
    }

    echo '</ol>';
}
//加载被分离出去的公共底部
include __DIR__ . '/inc/footer.php';