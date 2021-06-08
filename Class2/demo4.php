<?php
//类成员的方法重载
//call_user_func():以回调参数的方式来执行一个函数
//call_user_func_array():功能与上面一致，只是参数以数组方式提供

function sum($a,$b)
{
    return "{$a} + {$b} = " . ($a+$b);
}

//调用
echo sum(20,30),'<br>';

//回调方式来执行函数
echo call_user_func('sum',60,30),'<br>';
//echo sum(60,30),'<br>';

echo call_user_func_array('sum',[50,70]),'<br>';
echo sum(50,70),'<br>';
echo '<hr>';
class Test1
{
    public function sum($a,$b)
    {
        return "{$a} + {$b} = " . ($a+$b);
    }
}

$obj = new Test1();

echo $obj->sum(6,20),'<br>';

echo call_user_func_array([$obj,'sum'],[10,20]),'<br>';//第一个是对象，第二个是方法，第三个是输入的数组
echo call_user_func_array([(new Test1),'sum'],[40,10]),'<br>';

echo '<hr>';

class Test2
{
    public static function sum($a,$b)
    {
        return "{$a} + {$b} = " . ($a+$b);
    }
}

echo call_user_func_array(['Test2','sum'],[200,80]),'<br>';//第一个是类，第二个是方法，第三个是输入的数组
echo call_user_func_array('Test2::sum',[60,10]),'<br>';