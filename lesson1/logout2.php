<?php
//用cookie的方法做重复登陆的验证
//  必须在已经登陆的情况，才允许退出操作
if (isset($_COOKIE['username']) && $_COOKIE['username'] === 'admin'){
    //  退出
    setcookie('username',null,time()-36000);
    echo '<script>alert("退出成功"); location.assign("login2.php");</script>';
} else {
    echo '<script>alert("请先登陆"); location.assign("login2.php");</script>';
}