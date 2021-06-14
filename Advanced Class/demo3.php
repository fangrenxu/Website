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
        if($name == 'secret'){//如果当前访问的是 'secret',进行判断权限
            return ($this->name === 'admin') ? $this->$name : '无权查看';
        }
        return $this->$name;//$name其实就是等于$this->secret
    }

    public function __set($name,$value)
    {
        if($name == 'salary'){
            return ($this->name === 'admin') ? $this->$name = $value : '无权修改';
        }
        $this->$name = $value;

    }

    public function __isset($name)
    {
        if($this->name === 'admin') {
            if (isset($this->name)) {
                echo '存在该属性';
            } else {
                echo '不存在该属性';
            }
        }else {
            echo '无权检测';
        }
    }

    public function __unset($name)
    {
        if($this->name === 'admin') {
            unset($this->$name);
        } else {
            echo '无法删除';
        }
    }
}


$obj = new Demo3('卢克',6666);
//$obj = new Demo3('admin',6666);
//
//isset($obj->salary);

unset($obj->salary);

echo $obj->salary;
