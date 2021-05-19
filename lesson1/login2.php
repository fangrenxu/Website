<?php
//用cookie的方法做用户登陆与验证
if (isset($_SESSION['username']) && $_SESSION['username'] === 'admin') :
?>
<script>alert("你已经登陆，请不要重复登陆"); location.assign("admin2.php");</script>;

<!doctype html>
<html lang="`">
<head>
    <meta charset="UTF-8">
    <title>用户登录</title>
</head>
<body>
<h3>用户登陆</h3>
<form action="check2.php" method="post" onsubmit="return isEmpty();">
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
<script>
    function isEmpty(){
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        if(email.length === 0 || password.length ===0){
            alert('邮箱或密码不能为空');
            return false;
        }
    }
</script>
</body>
</html>


