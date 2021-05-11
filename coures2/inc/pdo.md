# Lesson2:PDO操作数据库

## 1.什么是PDO

* PDO：（Php Date Object）php数据对象
* PDO 统一了PHP访问各种类型数据库的访问方式
* 一句话，不管什么类型数据库，PDO一招搞定

## 2.PDO 涉及的两个重要类

* 'PDO':pdo对象（连接对象）
* 'PDOStatement':预处理对象（SQL语句对象）

## 3. PDO类常用方法

* '____construct()': 构造方法，连接数据库并创建连接对象
* ‘prepare()’:预处理方法，用来生成预处理对象'PDOStatement'

## 4. PDOStatement 类常用方法

* 'bindParam()': 将参数绑定到SQL语句模板上
* 'execute()': 执行SQL语句（读/写）
* 'fetch()': 获取结果集中的下一行
* 'fetchAll()': 返回结果集中的所有行
* 'fetchColumn()': 返回结果集下一行的单独的一列
* 'bindColumn()': 将结果集某字段绑定到指定变量上
* 'rowCount()': 返回受影响的记录数量（不适合SELECT）
* 'errorInfo()': 返回错误信息数组

## 5. 常用的预定义常量

* ‘PDO::PARAM_INT’:整数类型
* 'PDO::PARAM_STR':字符串类型
* 'PDO::FETCH_ASSOC':获取结果集中的关联部分

## 6. pdo操作数据库基本流程

1. 连接数据库，创建pdo对象
  *  '$pdo = new PDO($dsn, $username, $password);'

2. 执行SQL语句完成数据库操作
    * 创建SQL语句对象： '$stmt = $pdo->prepare($sql)'
    * 执行SQL查询：  '$stmt->execute()'
    * 对执行结果进行解析或进一步处理
    
3. [可选]销毁pdo对象，关闭连接: '$pdo = null'