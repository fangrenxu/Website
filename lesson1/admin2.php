<?php
//用cookie的方法做未登录的验证
if (isset($_SESSION['username']) && $_SESSION['username'] === 'admin') :
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台的首页</title>
</head>
<body>
<h1>后台首页</h1>
<p>
    <?php echo $_COOKIE['username'] ?>
</p>

<p>
    <a href="logout2.php">退出</a>
</p>
</body>
</html>
<?php else: ?>
<script>alert("请先登陆"); location.assign("login2.php");</script>;
<?php endif; ?>