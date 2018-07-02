<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

</head>
<body >
<div align="center">
    <h2 >后台中心</h2>
    <a href="<?php echo U('Home/User/index');?>">用户管理</a>
    <a href="<?php echo U('Home/Index/password');?>">修改密码</a>
    <a href="<?php echo U('Home/Operate/index');?>">操作日志</a>
    <a href="<?php echo U('Home/Admin/manage');?>">管理员管理</a>
    <a href="<?php echo U('Home/Oil/index');?>">油品类型管理</a>
    <a href="<?php echo U('Home/List/index');?>" >车辆队列管理</a>
    <a href="<?php echo U('Home/Power/index');?>">权限管理</a>
    <a href="<?php echo U('Home/Announce/index');?>">公告内容管理</a>
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
    <title>用户信息管理</title>
    <link  media="all">
</head>
<body>
<h2 align="center">汽车信息</h2>
<table border="1" align="center">
    <tr>
        <th>车辆id</th>
        <th>车辆编号</th>
        <th>车牌号</th>
        <th>车架号</th>
        <th>操作</th>
    </tr>
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($vo["id"]); ?></td>
            <td><?php echo ($vo["number"]); ?></td>
            <td><?php echo ($vo["plate_number"]); ?></td>
            <td><?php echo ($vo["frame_number"]); ?></td>
            <td>
                <a href="/index.php?c=car&a=delete&id=<?php echo ($vo["id"]); ?>" style="background-color:#F00" id="delete">删除</a>
                <a href="/index.php?c=car&a=update&id=<?php echo ($vo["id"]); ?>">修改</a>
            </td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<div align="center">

    <a href="/index.php?c=car&a=add">增加汽车</a>
</div>
<script src="/hongdi/db_carorder_system/tp/Public/js/car.js"></script>
</body>
</html>