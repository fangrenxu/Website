<?php
//抽象类/具体类
abstract class Person1
{
    protected $name;

    public function __construct($name = 'luke')
    {
        $this->name = $name;
    }

    public function getName()//获取器
    {
        return $this->name;
    }

    //设置属性的方法，不在本类中实现，交给子类来实现
    abstract public function setName($value);//更新
}

class Stu extends Person1
{
    //构造方法不会自动继承
    public function __construct($name = 'luke')
    {
        parent::__construct($name);
    }

    //子类中必须将父类中的抽象方法实现了
    public function setName($value)
    {
        $this->name = $value;
    }


}

$stu = new Stu('卢克');

echo 'luke就是' . $stu->getName().'<br>';

$stu->setName('发如雪');
echo 'luke就是' . $stu->getName().'<br>';