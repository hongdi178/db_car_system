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
    <title>车辆队列</title>
</head>
<body>
<div align="center">

    <a href="<?php echo U('/Home/list/add');?>">添加车辆</a>
    <a href="">暂停全部车辆</a>

</div>
<table border="1" align="center">
    <tr>

        <th>订单编号</th>
        <th>车牌号</th>
        <th>排序</th>
        <th>真实姓名</th>
        <th>电话号码</th>
        <th>创建时间</th>
        <th>更新时间</th>
        <th>删除时间</th>
        <th>操作</th>
    </tr>
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($vo["order_number"]); ?></td>
            <td><?php echo ($vo["car_plate_number"]); ?></td>
            <td><?php echo ($vo["rank"]); ?></td>
            <td><?php echo ($vo["name"]); ?></td>
            <td><?php echo ($vo["phone"]); ?></td>
            <td><?php echo ($vo["create_time"]); ?></td>
            <td><?php echo ($vo["update_time"]); ?></td>
            <td><?php echo ($vo["delete_time"]); ?></td>
            <td>
                <a href="/index.php?c=list&a=delete&rank=<?php echo ($vo["rank"]); ?>" style="background-color:#F00" id="delete">删除</a>
                <a href="/index.php?c=oil&a=update&id=<?php echo ($vo["id"]); ?>">修改</a>
                <a href="/index.php?c=oil&a=find&id=<?php echo ($vo["id"]); ?>">查看</a>
            </td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>

</table>

</body>
</html>