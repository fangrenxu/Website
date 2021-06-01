<?php
//public：公共/公开，类的外部，类的内部，子类中也可以
//protected：受保护的成员，对外不能访问，但对类的内部，以及它的子类是开放的，是可以访问的
//private：私有的，对外不开放，对子类也不开放，只对自己的类开放，只允许在当前类中的访问

class demo9
{
    //实例属性
    public $name;//姓名
    protected $position;//职位
    private $salary;//工资
    protected $department;//部门

    //构造方法s
    public function __construct($name,$position,$salary,$department)
    {
        $this->name = $name;
        $this->position = $position;
        $this->salary = $salary;
        $this->department = $department;
    }

    //对于外部不能直接访问的成员应该设置访问接口，并过滤访问请求
    //获取器方法
    public function getPostion()
    {
        return $this->department === '培训部' ? $this->position : '无权查看';
    }

    public function getSalary()
    {
        return $this->department === '财务部' ? $this->salary : '无权查看';
    }

    //设置器方法
    public function setSalary($value)
    {
        return $this->department === '财务部' ? $this->salary =$value : '无权更新';
    }
}




//$obj = new Demo9('张三','讲师',8888,'培训部');
$obj = new Sub4('李四','讲师',8888,'财务部');

echo $obj->getPostion(),'<br>';
echo $obj->getSalary(),'<br>';

$obj->setSalary(6666);
echo $obj->getSalary(),'<br>';