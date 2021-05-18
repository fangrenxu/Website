# Lesson1: Cookie

## 1. 用户登录与验证

## 2. 已经登录的验证

## 3. 未登录的验证

## 4. 重复登陆的验证

login.php ----> check.php ----> admin.php ----> logout.php ----> login.php

# Lesson2: Session

> 只需要修改两个地方
> 
> 1. 头部开启会话： `session_start()`;
> 2. `$_COOKIE`, 替换成 `$_SESSION

login.php

check.php

admin.php

logout.php