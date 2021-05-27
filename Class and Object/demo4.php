<?php
//类的成员可见性（封装）
//封装技术：类成员的可见性
class GrilFriend3
{

    //属性
    public $name;
    public $age;

    //隐私数据，不希望外人访问
    private $bhw;

    //构造方法，在外部new，实例化的时候自动调用
    public function __construct($name, $age, $bhw)//类实例化的时候，会自动调用
    {
        $this->name = $name;
        $this->age = $age;
        $this->bhw = $bhw;

    }

    //为了便于外部访问私有成员（被封装的成员），通常会给这些成员创建一个获取器的方法
    public function getBhw()
    {
        return var_export($this->bhw,true);
    }
}

$girl1 = new GrilFriend3('荷花',30,[75,24,36]);
//print_r($girl1->bhw);
echo $girl1->name,'<br>';
echo $girl1->getBhw();//getBhw()就是私有属性$bhw的访问接口方法