<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>查看订单</title>
    <link rel="stylesheet" href="/Public/layui-v2.2.5/layui/css/layui.css"  media="all">
</head>
<body>
<h2 align="center">订单信息</h2>
<div align="center">
    订单状态：
    <select class="select">
        <?php if(($status) == "0"): ?><option value="0" selected="selected">未接单</option>
            <?php else: ?>
            <option value="0">未接单</option><?php endif; ?>
        <?php if(($status) == "1"): ?><option value="1" selected="selected">已接单</option>
            <?php else: ?>
            <option value="1">已接单</option><?php endif; ?>
        <?php if(($status) == "2"): ?><option value="2" selected="selected">已结束</option>
            <?php else: ?>
            <option value="2">已结束</option><?php endif; ?>
    </select>
    <div>
        <label >出发时间选择</label>
        <input id="test" size="40px">
    </div>
    <a type="button" id="button">生成excel</a>
</div>
<table border="1" align="center">
    <tr>
        <th>id</th>
        <th>订单编号</th>
        <th>订单号</th>
        <th>创建时间</th>
        <th>出发时间</th>
        <th>出车车牌号</th>
        <th>目的地</th>
        <th>订单状态</th>
        <th>接单司机编号</th>
        <th>提货单号</th>
        <th>合同号</th>
        <th>缺货信息</th>
        <th>提货数量</th>
        <th>提货时间</th>
        <th>结算单位</th>
        <th>商品名称</th>
        <th>操作</th>
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
            <td><?php echo ($vo["user_number"]); ?></td>
            <td><?php echo ($vo["pick_number"]); ?></td>
            <td><?php echo ($vo["contract_number"]); ?></td>
            <td><?php echo ($vo["short_supply_info"]); ?></td>
            <td><?php echo ($vo["delivery_quantity"]); ?></td>
            <td><?php echo ($vo["delivery_time"]); ?></td>
            <td><?php echo ($vo["settle_company"]); ?></td>
            <td><?php echo ($vo["goods_name"]); ?></td>
            <td>
                <a href="/index.php?c=order&a=delete&id=<?php echo ($vo["id"]); ?>">删除</a>
                <a href="/index.php?c=order&a=update&id=<?php echo ($vo["id"]); ?>">修改</a>
            </td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<div align="center">
    <a href="/index.php?c=admin&a=index" >退出</a>
</div>
<script src="/Public/jquery-3.3.1/jquery-3.3.1.js"></script>
<script src="/Public/js/dialog.js"></script>
<script src="/Public/dialog/layer.js"></script>
<script src="/Public/js/order.js"></script>
<script src="/Public/layui-v2.2.5/layui/layui.js" charset="utf-8"></script>
<script>
    layui.use('laydate', function(){
        var laydate = layui.laydate;

        laydate.render({
            elem: '#test'
            ,type: 'datetime'
            ,range: true //或 range: '~' 来自定义分割字符
        });
    });
</script>
</body>
</html>