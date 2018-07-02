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
    <a href="/Home/user/index">用户管理</a>
    <a href="/index.php?c=index&a=password">修改密码</a>
    <a href="/index.php?c=order&a=create">生成订单</a>
    <a href="/index.php?c=order&a=index">查看订单</a>
    <a href="/index.php?c=operate&a=index">操作日志</a>
    <a href="/index.php?c=admin&a=manage">管理员管理</a>
    <a href="<?php echo U('Home/oil/index');?>">油品类型管理</a>
    <a href="<?php echo U('Home/list/index');?>" >车辆队列管理</a>
</div>
<div align="center">
    <a href="<?php echo U('Home/index/index');?>">退出</a>
</div>

<hr />
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
    <h2>增加用户</h2>
</div>
<div align="center">
    <form action="/index.php?c=user&a=add" method="post">
        <div>微信头像：<input type="text" name="head_img" /></div>
        <div>微信昵称：<input type="text" name="nickname" /></div>
        <div>真实姓名：<input type="text" name="name" /></div>
        <div>手机号码：<input type="text" name="phone" /></div>
        <div>车辆车牌：<input type="text" name="" /></div>
        <div>隶属公司：<input type="text" name="company" /></div>
        <input type="submit" value="增加"/>
        <a></a>
    </form>
    <a href="/Home/user/index">返回</a>
</div>
</body>
</html>