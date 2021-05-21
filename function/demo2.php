<?php

// 函数的参数

// 默认参数
function sum($a = 20,$b = 30)
{
    $c = $a + $b;
    return $c;
}

//  给形参全部赋值
echo sum(15,25),'<br>';
//  给默认参数赋值
echo sum(15),'<br>';
echo sum();
echo '<hr>';

// 形参就是一个占位符
function sum1()
{
    //func_num_args(): 返回实参的数量
    return func_num_args();
}

echo sum1(10,20);