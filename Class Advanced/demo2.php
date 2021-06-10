<?php
//类常量的定义与访问
class Demo2
{
    const NATION = '中国';

    public static $sex = '男';

    private $name;

    public function __construct($name)
    {
       $this->name = $name;
    }

    public function getInfo()
    {
        return $this->name.'的性别是：'.self::$sex.'，国籍是：'. self::NATION;
    }
}

$obj = new Demo2('卢克');

echo Demo2::$sex,'<br>';

//访问类常量与访问类属性的方式是一样的
echo Demo2::NATION,'<br>';

echo $obj->getInfo(),'<br>';

Demo2::$sex = '保密';
echo Demo2::$sex,'<br>';

//Demo2::NATION = '美国';
//常量是不允许被更新的
//echo Demo2::NATION,'<br>';