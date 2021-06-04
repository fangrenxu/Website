<?php
//类成员的属性重载技术
//属性重载
class Demo3
{
    private $name;//完全私有的，类内可见，子类，类外不可见
    private $salary;
    protected $secret = '秘密';//受保护的，类内，子类可见，类外不可见

    //构造方法
    public function __construct($name,$salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    //属性重载
    public function __get($name)
    {
        return $this->name;
    }
}

$obj = new Demo3('卢克',25000);

echo $obj->name;