<?php
//类属性与类方法（静态成员）
class Demo1
{
    //实例属性
    public  static $product;

    //静态属性，是属于类，而不是属于实例
    public static $price;

    //构造方法
    public function __construct($product,$price)
    {
        self::$product = $product;
        self::$price = $price;
    }

    //实例方法
    public function getInfo1()
    {
        return self::$product . '，价格：' . self::$price;
    }

    //静态方法
    public static function getInfo2()
    {
        return self::$product . '，价格：' . self::$price;
    }

}

$obj = new Demo1('衣服',500);
echo Demo1::$product,'<br>';
//在类外部直接使用类名来访问静态成员
echo Demo1::$price,'<br>';
echo '<hr>';

echo $obj->getInfo1(),'<br>';
echo $obj->getInfo2(),'<br>';
