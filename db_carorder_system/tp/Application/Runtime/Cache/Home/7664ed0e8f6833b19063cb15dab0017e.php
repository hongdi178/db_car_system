<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

</head>
<body >
<div align="center">
    <h2 >后台中心</h2>
    <a href="/index.php?c=car&a=index">车辆管理</a>
    <a href="/index.php?c=user&a=index">用户管理</a>
    <a href="/index.php?c=index&a=password">修改密码</a>
    <a href="/index.php?c=order&a=create">生成订单</a>
    <a href="/index.php?c=order&a=index">查看订单</a>
    <a href="/index.php?c=operate&a=index">操作日志</a>
    <a href="/index.php?c=admin&a=manage">管理员管理</a>
</div>
<div align="center">
    <a href="<?php echo U('Home/index/index');?>">退出</a>
</div>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div align="center">
    <h2>增加车辆</h2>
</div>
<div align="center">
    <form action="/index.php?c=car&a=add" method="post">
        <div align="center">
            <span style="display:inline-block;width:100px;text-align:right;">编号：</span>
            <input type="text" name="number" />
            <BR>
            <span style="display:inline-block;width:100px;text-align:right;">车牌号</span>
            <input type="text" name="plate_number" />
            <BR>
            <span style="display:inline-block;width:100px;text-align:right;">车架号：</span>
            <input type="text" name="frame_number" />
            <BR>
            <input type="submit" value="增加"/>
            <a></a>
        </div>

    </form>
    <a href="/index.php?c=car&a=index">返回</a>
</div>
</body>
</html>