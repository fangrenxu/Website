<?php
//方法重载实例演示
require 'Query.php';
class Db
{
    //数据库连接对象
    protected static $pdo = null;

    //数据库连接方法，每次查询时再连接，实现真正的惰性连接，节省系统开销
    public static function connection()
    {
        self::$pdo = new PDO('mysql:host=127.0.0.1;dbname=php','root','admin');
    }

    //静态方法的重载
    public static function __callStatic($name,$arguments)
    {
        //连接上数据库
        self::connection();

        //实例化查询类
        $query = new Query(self::$pdo);

        //访问Query中的方法
        return call_user_func_array([$query,$name],[0]);
    }
}

Db::table('db_name.think_user')//返回的是一个query对象
    ->where('status>1')
    ->select();