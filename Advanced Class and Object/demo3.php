<?php
//细说接口与实现过程

interface iVehicle//声明一个接口
{
    //驱动方式：汽车，新能源
    public function setFuel($fuel);

    //用途
    public function setPurpose($purpose);
}

//Auto
class Car implements iVehicle
{
    public $fuel;
    public $purpose;

    //构造方法
    public function __construct($fuel = '汽油',$purpose = '家用')
    {
        $this->fuel = $fuel;
        $this->purpose = $purpose;
    }

    //将接口中的两个抽象方法实现了
    //驱动方式：汽车，新能源
    public function setFuel($fuel)
    {
        $this->fuel = $fuel;
    }

    //用途
    public function setPurpose($purpose)
    {
        $this->purpose = $purpose;
    }

    //可以在实现类中自定义自己的方法
    public function getInfo()
    {
        return $this->fuel . $this->purpose . '车 <br>';
    }
}


$car = new Car();
echo $car->getInfo();
echo '<hr>';

$car->setFuel('新能源');
$car->setPurpose('公交');
echo $car->getInfo();
echo '<hr>';

//如果暂时无法实现接口中的全部方法，可以用一个抽象类来实现部分方法
abstract class Auto implements iVehicle
{
    public $fuel;

    public function setFuel($fuel)
    {
        $this->fuel = $fuel;
    }
}

//再创建一个类，来继承这个抽象类
class Car1 extends Auto
{
    public $purpose;

    //构造方法
    public function __construct($fuel = '汽油',$purpose = '家用')
    {
        $this->fuel = $fuel;
        $this->purpose = $purpose;
    }
    //用途
    public function setPurpose($purpose)
    {
        $this->purpose = $purpose;
    }

    //可以在实现类中自定义自己的方法
    public function getInfo()
    {
        return $this->fuel . $this->purpose . '车 <br>';
    }
}

$car1 = new Car1();
echo $car1->getInfo();

echo '<hr>';

$car1->setFuel('天然气');
$car1->setPurpose('家用');
echo $car1->getInfo();