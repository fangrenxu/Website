<?php
//  开启会话
session_start(); // 向cokkie中写入session_id：PHPSESSID

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
<?php echo $_SESSION['username'] ?>
</p>

<p>
    <a href="logout.php">退出</a>
</p>
</body>
</html>

<?php
else :
endif;
?>