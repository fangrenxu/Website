<?php
//在继承上下文中的封装
class GrilFriend4
{

    //属性
    public $name;
    public $age;

    //隐私数据，不希望外人访问
    //private:只允许在本类中的使用
    //private $bhw;

    //proteted:这个属性将不仅仅在本类可访问，在子类中也可以访问，但是在类的外部不可访问
    protected $bhw;

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
class SubGril3 extends GrilFriend4
{
    public $role;   //角色
    public function __construct($name, $age, $bhw,$role)
    {
        parent::__construct($name, $age, $bhw);
        $this->role = $role;
    }

    //重写父类中的$bhw属性的获取器方法
    public function getBhw()
    {
        $bhw = $this->name.'的三围数据是：';

        if($this->role === '蜻蜓'){
            $bhw .= var_export($this->bhw,true);
        } else {
            $bhw = '对不起，你没有权限查看';
        }
        return $bhw;
    }
}
$girl = new SubGril3('荷花',30,[75,24,36],'老司机');
echo $girl->getBhw(),'<br>';
echo '<hr>';
$girl->role = '蜻蜓';
echo $girl->getBhw(),'<br>';
