<?php

//类的扩展（继承）
class GrilFriend2
{

    //属性
    public $name;
    public $age;
    public $bhw;

    //构造方法，在外部new，实例化的时候自动调用
    //$this：当前类实例的引用
    public function __construct($name, $age, $bhw)//类实例化的时候，会自动调用
    {
        $this->name = $name;
        $this->age = $age;
        $this->bhw = $bhw;

    }

    //方法
    public function hobby($hobby)
    {
        return $hobby;
    }
    //输出女朋友的基本信息
    public function getInfo($hobby)
    {
        //访问
        $res = '女朋友的';
        $res .='<br>姓名：'.$this->name;
        $res .='<br>年龄：'.$this->age;
        $res .='<br>三围：'.var_export($this->bhw,true);
        $res .='<br>爱好：'.$this->hobby($hobby);

        echo $res;
    }
}

//extends:扩展
//GrilFriend2:父类，超类，基类
//SubGril1:子类，派生类
class SubGril1 extends GrilFriend2
{
    //...
}

$SubGril1 = new SubGril1('月季',26,[83,61,89]);
echo $SubGril1->getInfo('温柔善良');

echo '<hr>';

class SubGril2 extends GrilFriend2
{
    //添加新属性
    public $salary;

    //添加了新属性，需要在实例化的时候，新属性$salary也要初始化
    public function __construct($name, $age, $bhw,$salary)
    {
        parent::__construct($name, $age, $bhw);

        //新成员的初始化
        $this->salary = $salary;
    }

    //在子类中对父类中的方法进行重写
    //输出女朋友的基本信息
    public function getInfo($hobby)
    {
        //访问
        $res = '女朋友的';
        $res .='<br>姓名：'.$this->name;
        $res .='<br>年龄：'.$this->age;
        $res .='<br>三围：'.var_export($this->bhw,true);
        $res .='<br>爱好：'.$this->hobby($hobby);
        $res .='<br>工资：'.$this->salary;

        echo $res;
    }
}
echo '<hr>';

$subGril2 = new SubGril2('雏菊',19,[83,60,87],9000);
echo $subGril2->getInfo('读书看报');

