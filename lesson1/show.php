<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>最新影视剧介绍</title>
    <style>
        ul{
            text-align:center;
        }
        ul li{
            /*去掉默认样式*/
            list-style-type: none;
            /*转为水平显示*/
            display: inline-block;
            width: 30px;
            height: 20px;
            border: 1px solid black;
            /*垂直水平居中*/
            text-align: center;
            line-height: 20px;
            cursor: pointer;
            margin-left: 5px;
        }
        ul li:hover{
            background-color:lightblue;
            border: 1px solid red;
        }

    </style>
</head>

<body onload="getData(<?= $_GET['p'] ?? 1 ?>)">
<table>
    <caption>最新影视剧介绍</caption>
    <thead>
    <tr>
        <th>序号</th>
        <th>片名</th>
        <th>简介</th>
    </tr>
    </thead>

    <tbody></tbody>
</table>
<!--分页条-->
<ul>
    <li>1</li>
    <li>2</li>
    <li>3</li>
</ul>
<script>
    function getData(p){
        var request = new XMLHttpRequest();
        // 监听请求
        request.onreadystatechange = function (ev){
            //请求成功
            if (request.readyState === 4 && request.status === 200){
                console(request.responseText);
            }
        }

        //配置请求
        request.open('GET','get_movies.php?p='+p.toString(),true);
        //发送请求
        request.send(null);
    }
</script>
</body>
</html>