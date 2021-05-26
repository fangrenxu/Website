<?php
//类的构造方法
//构造方法
//这个特殊的方法，就是构造方法，该方法并非由用户直接调用，而是由系统自动调用
//这种由外部行为自动触发的类方法，叫：魔术方法，使用双下划线作为前缀
//构造方法：__construct()
class GrilFriend1
{

    //属性
    public $name;
    public $age;
    public $bhw;

    //构造方法，在外部new，实例化的时候自动调用
    //$this：当前类实例的引用
    public function __construct($name, $age, $bhw)
    {
        $this->name = $name;
        $this->age = $age;
        $this->bhw = $bhw;
        $this->getInfo();
    }

    //方法
    public function hobby($hobby)
    {
        return $hobby;
    }
    //输出女朋友的基本信息
    public function getInfo()
    {
        //访问
        $res = '女朋友的';
        $res .='<br>姓名：'.$this->name;
        $res .='<br>年龄：'.$this->age;
        $res .='<br>三围：'.var_export($this->bhw,true);
        $res .='<br>爱好：'.$this->hobby('逛街花钱');

        echo $res;
    }
}


$girl1 = new GrilFriend1('牡丹',24,[83,60,84]);
//$girl1->getInfo();


echo '<hr>';

$girl1 = new GrilFriend1('玫瑰',23,[85,66,86]);