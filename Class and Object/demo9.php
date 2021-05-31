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

    public function __construct($name,$position,$salary,$department)
    {
        $this->name = $name;
        $this->position = $position;
        $this->salary = $salary;
        $this->department = $department;
    }
}