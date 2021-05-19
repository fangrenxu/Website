<?php
//用cookie的方法做重复登陆的验证
//  退出
setcookie('username',null,time()-36000);
echo '<script>alert("退出成功"); location.assign("login2.php");</script>';