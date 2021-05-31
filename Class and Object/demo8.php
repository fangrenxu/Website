<?php
//类的继承，功能扩展，方法重写
class Demo8
{
    //公开实例属性
    public $product;
    public $price;

    //构造方法：在类实例化时能自动调用，给实例属性进行初始化
    public function __construct($product,$price)
    {
        $this->product = $product;
        $this->price = $price;
    }

    //公开实例方法
    public function getInfo()
    {
        return '品名：'. $this->product. '，价格：' . $this->price . '<br>';
    }
}

//子类Sub1，代码复用
class sub1 extends Demo8
{
    //...
}

$sub1 = new Sub1('手机',5000);
echo $sub1->getInfo(),'<hr>';

/**************************************************************************************************/
