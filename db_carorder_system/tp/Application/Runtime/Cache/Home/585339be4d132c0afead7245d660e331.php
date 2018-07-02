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
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link   media="all">
</head>
<body>
<div align="center">
    <h2>生成订单</h2>
</div>
<div align="center">
    <table  method="post" >
            <tr><td>订单号：</td>  <td><input type="text" name="order_number" id="order_number"  type="number"/></td></tr>
            <tr><td>目的地：</td>      <td><input type="text" name="destination" id="destination"/></td></tr>
            <tr><td>商品名称：</td>    <td><input type="text" name="goods_name" id="goods_name"/></td></tr>
            <tr><td>数量：</td>       <td><input type="text" name="delivery_quantity" id="delivery_quantity"/></td></tr>
            <tr><td>出发时间：</td>    <td><input type="text" name="departure_time" id="test"/></td></tr>
        <tr></tr>
    </table>
    <input type="submit" value="增加" id="submit"/>
</div>
<script src="/Public/jquery-3.3.1/jquery-3.3.1.js"></script>
<script src="/Public/js/dialog.js"></script>
<script src="/Public/dialog/layer.js"></script>
<script src="/Public/js/order.js"></script>
<script src="/Public/layui-v2.2.5/layui/layui.js" charset="utf-8"></script>
<script>
    layui.use('laydate', function() {
        var laydate = layui.laydate;
        laydate.render({
            elem: '#test'
            , type: 'datetime'
        });
    });
</script>
</body>
</html>