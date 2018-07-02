<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/Public/layui-v2.2.5/layui/css/layui.css" media="all">
</head>
<body>
<h2 align="center">公共订单池</h2>
<table class="layui-table">
    <tr>
        <th lay-data="{field:'username', width:100}">id</th>
        <th lay-data="{field:'username', width:100}">订单编号</th>
        <th lay-data="{field:'username', width:100}">订单号</th>
        <th lay-data="{field:'username', width:100}">创建时间</th>
        <th lay-data="{field:'username', width:100}">出发时间</th>
        <th lay-data="{field:'username', width:100}">出车车牌号</th>
        <th lay-data="{field:'username', width:100}">目的地</th>
        <th lay-data="{field:'username', width:100}">订单状态</th>
        <th lay-data="{field:'username', width:100}">接单司机id</th>
        <th lay-data="{field:'username', width:100}">提货单号</th>
        <th lay-data="{field:'username', width:100}">合同号</th>
        <th lay-data="{field:'username', width:100}">缺货信息</th>
        <th lay-data="{field:'username', width:100}">提货数量</th>
        <th lay-data="{field:'username', width:100}">提货时间</th>
        <th>商品名称</th>
        <th lay-data="{field:'username', width:100}">结算单位</th>
        <th lay-data="{field:'username', width:100}">操作</th>
    </tr>
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($vo["id"]); ?></td>
            <td><?php echo ($vo["number"]); ?></td>
            <td><?php echo ($vo["order_number"]); ?></td>
            <td><?php echo ($vo["create_time"]); ?></td>
            <td><?php echo ($vo["departure_time"]); ?></td>
            <td><?php echo ($vo["car_plate_number"]); ?></td>
            <td><?php echo ($vo["destination"]); ?></td>
            <?php if(($vo["order_status"]) == "0"): ?><td>未接单</td><?php endif; ?>
            <?php if(($vo["order_status"]) == ""): ?><td>未定义</td><?php endif; ?>
            <?php if(($vo["order_status"]) == "1"): ?><td>已接单</td><?php endif; ?>
            <?php if(($vo["order_status"]) == "2"): ?><td>已结束</td><?php endif; ?>
            <td><?php echo ($vo["user_id"]); ?></td>
            <td><?php echo ($vo["pick_number"]); ?></td>
            <td><?php echo ($vo["contract_number"]); ?></td>
            <td><?php echo ($vo["short_supply_info"]); ?></td>
            <td><?php echo ($vo["delivery_quantity"]); ?></td>
            <td><?php echo ($vo["delivery_time"]); ?></td>
            <td><?php echo ($vo["goods_name"]); ?></td>
            <td><?php echo ($vo["settle_company"]); ?></td>
            <td>

                <?php if(($vo["order_status"]) == "0"): ?><a href="/index.php?c=driver&a=recive&id=<?php echo ($vo["id"]); ?>">接单</a><?php endif; ?>
                <?php if(($vo["order_status"]) == "1"): ?>无法接单<?php endif; ?>
                <?php if(($vo["order_status"]) == "2"): ?>无法接单<?php endif; ?>

            </td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<div align="center">
    <a href="/index.php?c=driver&a=index" >退出</a>
</div>
<script src="/Public/layui-v2.2.5/layui/layui.js"></script>
<script>

</script>
</body>
</html>