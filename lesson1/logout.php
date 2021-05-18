<?php
session_start(); // 向cokkie中写入session_id：PHPSESSID

// 必须在已经登陆的情况夏，才允许退出操作
if (isset($_SESSION['username']) && $_SESSION['username'] === 'admin'){
    //  退出
    session_destroy(); //将服务器上对应的session 文件删除
    setcookie('PHPSESSID',null,time()-36000);
    echo '<script>alert(\'退出成功\'); location.assign("login.php");</script>';
} else {
    echo '<script>alert(\'请先登陆\'); location.assign("login.php");</script>';
}