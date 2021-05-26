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