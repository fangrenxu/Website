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
    //return func_num_args();

    //return func_get_arg(0);//第一个实参
    //return func_get_arg(1);//第二个实参

    $a = func_get_arg(0);
    $b = func_get_arg(1);

    return $a + $b;
}

echo sum1(10,20,30,40,50);