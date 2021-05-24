<?php
//匿名函数与闭包的知识
/*
 * 官网解释：
 *匿名函数（Anonymous functions），也叫闭包函数（closures），
 *允许 临时创建一个没有指定名称的函数。最经常用作回调函数callable参数的值。
 *当然，也有其它应用的情况。匿名函数目前是通过 Closure 类来实现的。
 */

//匿名函数：作为值使用
$sum = function($a,$b){
    return $a + $b;
};

echo $sum(5,6);
echo '<hr>';

//匿名函数，当成函数的参数来使用，回调函数
$arr = [4,1,89,32,21];
usort($arr,function($a,$b){
//    return $a - $b;
    // php7，太空船运算符 <=>
    return $a <=> $b;
});

$res = print_r($arr,true);
echo '<pre>'. $res . '</pre>';

//  如何获取父作用域中的变量
$email = 'admin@php.cn';

$f1 = function(){
    return $email;
};

echo $f1();
echo '<hr>';

$f2 = function() use ($email){
    return $email;
};

echo $f2();
echo '<hr>';


//大多数情况下，我们会在闭包函数中对外部变量进行更新
//这时可以将外部变量以引用的方式传入
//默认情况下，参数是以值的方式传到函数中，所谓引用，就是内外部实际访问的是同一个变量
//只需要在参数前添加一个取地址符： & 即可
$f3 = function() use (&$email){
    return $email = 'peter@html.cn';
};

echo $f3();
echo '<hr>';

//因为子函数中也可以使用匿名函数，use
function demo()
{
    $name = 'Luke Wong';

    return function() use ($name){
        return $name;
    };
}

//demo() 是一个函数，
$func = demo();
echo $func();
echo '<hr>';
echo demo()();