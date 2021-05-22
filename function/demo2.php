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

//    $a = func_get_arg(0);
//    $b = func_get_arg(1);
//
//    return $a + $b;

//    print_r(func_get_args());

//    $total = 0;
//
//    foreach (func_get_args() as $value)
//    {
//        //$total = $total + $value;
//        $total += $value;
//    }
//        return $total;


    return array_sum(func_get_args());

}

echo sum1(10,20,30,40,50);
echo '<hr>';

// PHP 7，提供了一个变长参数,代替了：func_get_args（）
function sum2(...$params)
{
    //print_r($params);//输出数组
    return array_sum($params);//输出数组内所有值的和
}

echo sum2(1,2,3,4,5,6);