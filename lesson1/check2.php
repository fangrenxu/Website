<?php
//用cookie的方法做已经登陆的验证
//  连接数据库
require __DIR__ . '/inc/connect.php';

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
print_r($user);
if (false === $user){
    // 登录失败
    echo '<script>alert("登录失败，请检查"); location.href="login.php";</script>';
    die();  //exit; exit();
}

//  登陆成功，将用户登陆信息写到COOKIE中
setcookie('username',$user['username']);
echo '<script>alert("登陆成功");location.assign="admin2.php";</script>';