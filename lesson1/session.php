<?php
// 开启，就是向浏览器的cookie中写入session_id
session_start();

$_SESSION['username'] = 'www.php.cn';

//username|s:4:"luke";  被序列化的变量

echo $_SESSION['username'];


//session_unset();    //清空内容，而服务器上的session文件仍在

session_destroy();  // 内容 + 文件 双清空 通常做到这一步就OK

//setcookie('PHPSESSID',null,time()-3600);//  内容 + 文件 + session_id：三位一体的清空
