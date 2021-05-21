<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>最新影视剧介绍</title>
    <style>
        table {
            border-collapse: collapse;
        }
        table, td, th {
            border: 1px solid black;
        }
        th
        {
            background-color:lightblue;
            color:black;
        }
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

        .active {
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

</ul>
<script>
    function getData(p){
        var request = new XMLHttpRequest();
        // 监听请求
        request.onreadystatechange = function (ev){
            //请求成功
            if (request.readyState === 4){
                //将服务器返回的JSON字符串转为JS对象
                var data = JSON.parse(request.responseText);

                //动态显示分页条
                var ul = document.getElementsByTagName('ul').item(0);
                for(var i = 0, n = data[0]; i< n; i += 1){
                    var li =document.createElement('li');
                    li.innerText = (i+1);

                    //设置当前页码的高亮显示
                    li.className = (li.innerText === p.toString() ? 'active' : null);

                    //li 就是当前的页码
                    li.onclick = function (){
                        var search = location.search.slice(0,3) + this.innerText;
                        location.replace(search);
                    };

                    ul.appendChild(li);
                }

                //将数据表中的内容，渲染到当前的表格中
                var tbody = document.getElementsByTagName('tbody').item(0);
                data[1].forEach(function (value) {
                    var tr = document.createElement('tr');
                    for (var key in value){
                        var td = document.createElement('td');
                        td.innerText = value[key];
                        tr.appendChild(td);
                    }
                    tbody.appendChild(tr);
                })
            }
        };

        //配置请求
        request.open('GET','get_movies.php?p='+p.toString(),true);
        //发送请求
        request.send(null);
    }
</script>
</body>
</html>