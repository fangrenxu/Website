<?php
//类与对象的关系
$girlName1 = '牡丹';
$girlAge1 = 24;
$girlBhw1 = [83,60,84];
$girlHobby1 = '逛街花钱';

$res = '女朋友的';
$res .='<br>姓名：'.$girlName1;
$res .='<br>年龄：'.$girlAge1;
$res .='<br>三围：'.var_export($girlBhw1,true);//var_export:输出或返回一个变量的字符串表示
$res .='<br>爱好：'.$girlHobby1;

echo  $res;
echo '<hr>';

$girlName2 = '玫瑰';
$girlAge2 = 23;
$girlBhw2 = [85,66,86];
$girlHobby2 = '游泳健身';

$res = '女朋友的';
$res .='<br>姓名：'.$girlName2;
$res .='<br>年龄：'.$girlAge2;
$res .='<br>三围：'.var_export($girlBhw2,true);
$res .='<br>爱好：'.$girlHobby2;

echo  $res;


// 类就是创建对象的模板
class GrilFriend
{
    //类的成员包括两处：变量和函数，在类中叫：属性和方法
    //属性
    public $name;
    public $age;
    public $bhw;

    //方法
    public function hobby($hobby)
    {
        return $hobby;
    }
}
echo '<hr>';
//创建对象的过程，就是类的实例化，
$girl1 = new GrilFriend();
//对类中的属性进行初始化
//访问对象成员必须使用对象成员访问符：->
$girl1->name = '牡丹';
$girl1->age = 24;
$girl1->bhw = [83,60,84];
$hobby1 = $girl1->hobby('逛街花钱');

//访问
$res = '女朋友的';
$res .='<br>姓名：'.$girl1->name;
$res .='<br>年龄：'.$girl1->age;
$res .='<br>三围：'.var_export($girl1->bhw,true);
$res .='<br>爱好：'.$hobby1;

echo $res;

echo '<hr>';

$girl2 = new GrilFriend();
//对类中的属性进行初始化
//访问对象成员必须使用对象成员访问符：->
$girl2->name = '玫瑰';
$girl2->age = 23;
$girl2->bhw = [85,66,86];
$hobby2 = $girl2->hobby('游泳健身');

//访问
$res = '女朋友的';
$res .='<br>姓名：'.$girl2->name;
$res .='<br>年龄：'.$girl2->age;
$res .='<br>三围：'.var_export($girl2->bhw,true);
$res .='<br>爱好：'.$hobby2;

echo $res;