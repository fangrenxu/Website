#   course2.制作公共模板

##  1. 什么是模板

* **模板**是用来展示动态数据的载体
* 在实际项目中，许多页面的结构是完全相同的，指数数据不同
* 对于这些页面，可以创建一个模板，在调用时填充上对应数据即可
* 通过模板技术，可以极大的简化Web开发工作
* PHP天生就是一个模板语言，非常适合创建这种动态页面

## 2. 创建模板数据

* 实际项目中，模板中的数据应该来自数据库
* 数据表查询结果，大多是一个二维数组
* 所以，我们先用二维数组来模拟数据表中的数据
* 这些动态数据需要在多个页面中调用，所以放在公共文件中
* 这里选择直接创建在'inc/header.php'中

## 3.创建首页

* 'index.php'：首页入口

* 作为入口文件，必须具备两个基本功能

  *显示出整个项目的基本内容

  *创建到达其他页面的链接入口

## 1. 列表模板

* 'list.php'：栏目页模板

* 作为栏目页，只需要将'index.php'改动三处即可

  *使用GET方式接收'index.php'传过来的栏目id

  *将外层循环中的栏目名称显示语句放到内层循环中

  *添加一些自定义样式，显示影视剧详情内容