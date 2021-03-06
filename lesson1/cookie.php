<?php


// cookie 与 sessin（会话）

/**
 * http协议
 * 1. http是无状态的，每个页面完全独立，无法通信
 * 2. http无法跟踪当前访问者的，无法提供个性化的定制服务，例如登陆，购物车等
 * 3. 有必要在多个页面之间存储一些公共变量，保存访问者的信息，就显示非常有必要
 *
 * cookie与session
 * 1. cookie与session是php心中非常有效的在多页面间跟踪用户的手段
 * 2. cookie是将用户信息保存在浏览器端，因为浏览器的限制，容量有限，且并不安全
 * 3. session，也叫会话，是将用户信心保存到服务器端，容量更大，并且非常安全
 * 4. 其实session也是基于cookie的，将标识用户身份的SESSION_ID保存在客户端
 * 5. 所以cookie与session密不可分，尽管在操用session时，cookie似乎感觉不到
 */

// $_COOKIE 超全局变量数组
// 超全局是指：在任何一个php脚本中，不需要事先定义就可以使用，因为它们已经随着页面自动 加载了
//一定要注意，超全局不是跨页面

// 设置
setcookie('username','admin',time()-1);
//setcookie('user_id','',time()-3600);
// 查询读取
//print_r($_COOKIE);

//$_COOKIE['user_id'] = '888';
print_r($_COOKIE);