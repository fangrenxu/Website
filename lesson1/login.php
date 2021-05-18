<?php

//  开启会话
session_start(); // 向cokkie中写入session_id：PHPSESSID

if (isset($_SESSION['username']) && $_SESSION['username'] === 'admin') :
?>
<script>alert('您已经登录了，请不要重复登录'); location.assign("admin.php");</script>
<?php endif; ?>
<!doctype html>
<html lang="`">
<head>
    <meta charset="UTF-8">
    <title>用户登录</title>
</head>
<body>
<h3>用户登录</h3>
<form action="check.php" method="post" onsubmit="return isEmpty();">
    <p>
        <label for="email">邮箱：</label>
        <input type="email" name="email" id="email">
    </p>

    <p>
        <label for="password">密码：</label>
        <input type="password" name="password" id="password">
    </p>
    <p>
        <button>提交</button>
    </p>
</form>
</body>
