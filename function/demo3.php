<?php

//  函数的返回值

//return
function demon1()
{
    return 'Hello PHP';
}

echo demon1();
echo '<hr>';

//  没有return，返回null
function demon2()
{

}

echo is_null(demon2()) ? '返回NULL' : '没有返回NULL';
echo '<hr>';

//  函数不允许同时返回多个结果

//function demon3()
//{
//    $a = 10;
//    $b = 20;
//    return $a,$b;
//}
//
//echo demon3();
//  对于多个值，应该放在数组中返回
function demon4()
{
    $a = 10;
    $b = 20;
    return [$a,$b];
}

echo '<pre>'. print_r(demon4(),true);

echo '<hr>';

