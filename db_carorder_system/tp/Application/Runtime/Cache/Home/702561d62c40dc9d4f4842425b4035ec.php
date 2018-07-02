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
    <form action="/index.php?c=order&a=update&id=<?php echo ($attr["id"]); ?>" method="post">
        <div>
            <span style="display:inline-block;width:100px;text-align:right;">id：</span><input type="text" name="id" value="<?php echo ($attr["id"]); ?>" disabled/></div>
        <div><span style="display:inline-block;width:100px;text-align:right;">订单编号：</span><input type="text" name="number" value="<?php echo ($attr["number"]); ?>" disabled/></div>
        <div><span style="display:inline-block;width:100px;text-align:right;">订单号：</span><input type="text" name="order_number" value="<?php echo ($attr["order_number"]); ?>"/></div>
        <div><span style="display:inline-block;width:100px;text-align:right;">创建时间：</span><input type="text" name="create_time" value="<?php echo ($attr["create_time"]); ?>"/></div>
        <div><span style="display:inline-block;width:100px;text-align:right;">出发时间：</span><input type="text" name="departure_time" value="<?php echo ($attr["departure_time"]); ?>"/></div>
        <div><span style="display:inline-block;width:100px;text-align:right;">出车车牌号：</span><input type="text" name="car_plate_number" value="<?php echo ($attr["car_plate_number"]); ?>"/></div>
        <div><span style="display:inline-block;width:100px;text-align:right;">目的地：</span><input type="text" name="destination" value="<?php echo ($attr["destination"]); ?>"/></div>
        <div><span style="display:inline-block;width:100px;text-align:right;">订单状态：</span><input type="text" name="order_status" value="<?php echo ($attr["order_status"]); ?>"/></div>
        <div><span style="display:inline-block;width:100px;text-align:right;">司机编号：</span><input type="text" name="user_number" value="<?php echo ($attr["user_number"]); ?>"/></div>
        <div><span style="display:inline-block;width:100px;text-align:right;">提货单号：</span><input type="text" name="pick_number" value="<?php echo ($attr["pick_number"]); ?>"/></div>
        <div><span style="display:inline-block;width:100px;text-align:right;">合同号：</span><input type="text" name="contract_number" value="<?php echo ($attr["contract_number"]); ?>"/></div>
        <div><span style="display:inline-block;width:100px;text-align:right;">缺货信息：</span><input type="text" name="short_supply_info" value="<?php echo ($attr["short_supply_info"]); ?>"/></div>
        <div><span style="display:inline-block;width:100px;text-align:right;">提货数量：</span><input type="text" name="delivery_quantity" value="<?php echo ($attr["delivery_quantity"]); ?>"/></div>
        <div><span style="display:inline-block;width:100px;text-align:right;">提货时间：</span><input type="text" name="delivery_time" value="<?php echo ($attr["delivery_time"]); ?>"/></div>
        <div><span style="display:inline-block;width:100px;text-align:right;">结算单位：</span><input type="text" name="settle_company" value="<?php echo ($attr["settle_company"]); ?>"/></div>
        <input type="submit" value="修改"/>
    </form>
</div>
<div align="center">
    <button class="back" >取消</button>
</div>
<script src="/Public/jquery-3.3.1/jquery-3.3.1.js"></script>
<script src="/Public/js/order.js"></script>
</body>
</html>