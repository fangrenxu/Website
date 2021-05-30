<?php

//构造方法
//用户不能直接调用构造方法，则由某个时间来触发或自动调用

class Demo7
{
    //公开实例属性
    public $product;
    public $price;

    //构造方法：在类实例化时能自动调用，给实例属性进行初始化
    //第一次赋值：初始化
    //第二次或N次：更新，修改
    public function __construct($product,$price)
    {
        $this->product = $product;
        $this->price = $price;
    }

    //公开实例方法
    public function getInfo()
    {
        return '品名：'. $this->product. '，价格：' . $this->price . '<br>';
    }

}
//实例化
$obj = new Demo7('电脑',5000);
echo $obj->getInfo(),'<hr>';

/**************************************************************************************************/

//实战，数据库连接
class Db
{
    //连接参数
    public $dsn;
    public $user;
    public $password;

    //连接对象
    public $pdo;

    //连接方法
    public function connect()
    {
        $this->pdo = new PDO($this->dsn,$this->user,$this->password);
    }
    //在构造方法中实现自动连接数据库
    public function __construct($dsn,$user,$password)
    {
        $this->dsn = $dsn;
        $this->user = $user;
        $this->password = $password;

        //在实例化的时候就直接连接上
        $this->connect();
    }
}

//实例化Db
$db = new Db('mysql:host=127.0.0.1;dbname=php','root','admin');

if($db->pdo){
    echo '<h3>连接成功</h3>';
}

$stmt = $db->pdo->prepare('SELECT * FROM `category`');
$stmt->execute();
foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $cate){
    print_r($cate);echo '<br>';
}