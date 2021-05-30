<?php
//self,$this
//实例属性：必须用类实例（对象）来访问的变量
//实例方法：公开实例方法，必须用类实例（对象）来访问的方法
//self:当前类
//$this：当前类实例
class  Demo6
{
    //公开实例属性
    public $product = '手机';
    public $price = 3800;
    //公开实例方法
    public function getInfo1()
    {
        //self：总是指向当前类，Demo6
        $obj = new self();
        return '品名：'. $obj->product. '，价格：' . $obj->price . '<br>';
    }
    //公开实例方法
    public function getInfo2()
    {
        return '品名：'. $this->product. '，价格：' . $this->price . '<br>';
    }

}


class Client
{
    public $instance = null;
    //类的实例化
    public function getInstance($class)
    {
        $this->instance =new $class;
    }

}

//客户端代码调用
$client = new Client();
$client->getInstance('Demo6');
echo $client->instance->getInfo2();//Demo6的实例

echo '<hr>';



//自调用，自启动
$obj = new Demo6();
echo $obj->getInfo1();
echo '<hr>';
echo $obj->getInfo2();
echo '<hr>';
$methods = get_class_methods('Demo6');//get_class_methods — 返回由类的方法名组成的数组
echo '<pre>'. print_r($methods,true);
