<?php
//  开启会话
session_start(); // 向cokkie中写入session_id：PHPSESSID

if (isset($_SESSION['username']) && $_SESSION['username'] === 'admin') {
    echo '<script>alert(\'您已经登陆了，请不要重复登陆\'); location.assign("admin.php);</script>';

}

//  连接数据库
require __DIR__. '/inc/connect.php';

$email = $_POST['email'];
$password = sha1($_POST['password']);

//  用user表中进行验证
$sql = 'SELECT * FROM `user` WHERE `email`=:email AND `password` =:password LIMIT 1';

// 创建一个SQL语句模板的对象：预处理对象
$stmt = $pdo->prepare($sql);
//  执行
$stmt->execute(['email'=>$email,'password'=>$password]);


//  fetch()
$user = $stmt->fetch(PDO::FETCH_ASSOC);
//print_r($user); die;
if (false === $user){
    // 登录失败
    echo '<script>alert("登录失败，请检查"); location.href="login.php";</script>';
    die();  //exit; exit();
}

//  登录成功，将用户登录信息写到cookie中
$_SESSION['username'] = $user['username'];

echo '<script>alert(\'登录成功\'); location.assign("admin.php");</script>';