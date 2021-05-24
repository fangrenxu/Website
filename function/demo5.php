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
    return $a - $b;
});

$res = print_r($arr,true);
echo $res;
