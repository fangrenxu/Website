<?php
//类自动加载的原理与实现
//echo __DIR__;
//D:\phpstudy_pro\WWW\php\Advanced Class and Object
//require __DIR__. '/inc/Test1.php';
//require __DIR__. '/inc/Test2.php';
//require __DIR__. '/inc/Test3.php';

spl_autoload_register(function($className){
   require __DIR__. '/inc/'.$className.'.php';
});

$test1 = new Test1();

echo $test1->get();

echo '<hr>';

$test2 = new Test2();

echo $test2->get();

echo '<hr>';

$test3 = new Test3();

echo $test3->get();
