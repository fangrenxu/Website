<?php
//加载被分离出去的公共头部
include __DIR__ . '/inc/header.php';
//获取当前要访问的栏目 id
$cate_id = $_GET['cate_id'];

// 因为是从数据库直接读取数值，所以不用将数字字符串转为整数类型
foreach ($cates as $cate) {
    if ($cate['cate_id'] === $cate_id) {
        echo "<h2>{$cate['alias']}</h2>";
        echo '<ol>';

        foreach ($movies as $movie) {
            if ($movie['cate_id'] === $cate['cate_id']) {
            //detail.php：详情页模板文件
                echo '<li><a href="detail.php?mov_id=' . $movie['mov_id'] . '">' . $movie['name'] . '</a></li>';
            }
        }

    echo '</ol>';
    }
}
//加载被分离出去的公共底部
include __DIR__ . '/inc/footer.php';

