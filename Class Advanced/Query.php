<?php
//常用的数据查询操作
class Query
{
    //连接对象
    public $pdo = null;

    //数据表名称
    public $table = '';

    //字段列表
    public $field = '';

    //查询条件
    public $where = '';

    //显示数量
    public $limit = 0;


    //构造方法
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    //调用表名
    public function table($tableName)
    {
        $this->table = $tableName;
        //关键是这一步
        return $this;
    }

    //调用字段
    public function field($field)
    {
        $this->field = $field;
        //关键是这一步
        return $this;
    }

    //设置查询条件
    public function where($where)
    {
        $this->where = $where;
        return $this;
    }
    //设置显示数量
    public function limit($limit)
    {
        $this->limit = $limit;
        return $this;
    }
}