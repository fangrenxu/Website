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

class Sub2 extends Demo8
{
    public $num;//子类自有的

    //重写了父类的同名的构造方法
    public function __construct($product, $price,$num)
    {
        parent::__construct($product,$price);
        $this->num=$num;
    }

    //计算总价
    public function total()
    {
        return $this->price * $this->num;
    }
}

//实例化子类Sub2
$sub2 = new Sub2('电脑',4980,15);


echo $sub2->product.'的总价：'.$sub2->total().'元'.'<hr>';

/**************************************************************************************************/

class Sub3 extends Sub2
{
    //方法重写：total()
    public function total()
    {
        $total = parent::total();

        //设置折扣率
        switch(true)
        {
            case($total >= 10000 && $total < 20000);
                $discountRate = 0.98; //98折
                break;
            case($total >= 20000 && $total < 40000);
                $discountRate = 0.88; //98折
                break;
            case($total >= 40000 && $total < 60000);
                $discountRate = 0.78; //98折
                break;
            case($total >= 60000);
                $discountRate = 0.68; //98折
                break;
            default:    //小于10000
                $discountRate = 1;
        }
        return round ($total * $discountRate,2);
    }
}

$sub3 = new Sub3('电脑',4980,15);
echo '折扣价：'.$sub3->total().'元'.'<hr>';
