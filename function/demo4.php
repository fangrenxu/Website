<?php
//  函数中的变量访问

$site = 'www.php.cn';

function demo1()
{
    return $site;
}

echo demo1();

echo '<hr>';

function demo2()
{
    global $site;

    return $site;
}

echo demo2();
echo '<hr>';

//  函数外部声明的变量，会自动变成为超全局变量数据$GLOBALS的成员
//echo $GLOBALS['site'];  //$site

function demo3()
{
    return $GLOBALS['site'];
}

echo demo3();
echo '<hr>';

//  常量也是不受作用域限制的，可以理解为只读变量，不能更新或删除
define('SITE_NAME','PHP中文网');

function demo4()
{
    return SITE_NAME;
}

echo demo4();
echo '<hr>';

function demo5()
{
    $email = 'admin@php.cn';

    return $email;
}

$email = demo5();

echo $email;