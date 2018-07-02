<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>接单</title>
</head>
<body>
<div align="center">
    <form >
        <div><span style="display:inline-block;width:150px;text-align:right;">订单编号：</span><input type="text" name="number" value="<?php echo ($attr["number"]); ?>" disabled/></div>
        <div><span style="display:inline-block;width:150px;text-align:right;">订单号：</span><input type="text" name="order_number" value="<?php echo ($attr["order_number"]); ?>" disabled/></div>
        <div><span style="display:inline-block;width:150px;text-align:right;">创建时间：</span><input type="text" name="create_time" value="<?php echo ($attr["create_time"]); ?>" disabled/></div>
        <div><span style="display:inline-block;width:150px;text-align:right;">出发时间：</span><input type="text" name="departure_time" value="<?php echo ($attr["departure_time"]); ?>" disabled/></div>
        <div>
            <span style="display:inline-block;width:100px;text-align:right;">出车车牌号：</span>
            <select name="jxname"  >
                <option value="0">请选择车牌号</option>
                <?php if(is_array($number)): $i = 0; $__LIST__ = $number;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value ="<?php echo ($vo["plate_number"]); ?>"><?php echo ($vo["plate_number"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
        <div><span style="display:inline-block;width:150px;text-align:right;">目的地：</span><input type="text" name="destination" value="<?php echo ($attr["destination"]); ?>" disabled/></div>
        <div><span style="display:inline-block;width:150px;text-align:right;">订单状态： </span><?php if(($attr["order_status"]) == "0"): ?><td>未接单</td><?php endif; ?>
            <?php if(($attr["order_status"]) == ""): ?><td>未定义</td><?php endif; ?>
            <?php if(($attr["order_status"]) == "1"): ?><td>已接单</td><?php endif; ?>
            <?php if(($attr["order_status"]) == "2"): ?><td>已结束</td><?php endif; ?></div>
        <div><span style="display:inline-block;width:150px;text-align:right;">接单司机编号：</span><input type="text" name="user_number" value="<?php echo ($id); ?>" disabled/></div>
        <div><span style="display:inline-block;width:150px;text-align:right;">提货单号：</span><input type="text" name="pick_number" value="<?php echo ($attr["pick_number"]); ?>"/></div>
        <div><span style="display:inline-block;width:150px;text-align:right;">合同号：</span><input type="text" name="contract_number" value="<?php echo ($attr["contract_number"]); ?>"/></div>
        <div><span style="display:inline-block;width:150px;text-align:right;">缺货信息：</span><input type="text" name="short_supply_info" value="<?php echo ($attr["short_supply_info"]); ?>"/></div>
        <div><span style="display:inline-block;width:150px;text-align:right;">提货数量：</span><input type="text" name="delivery_quantity" value="<?php echo ($attr["delivery_quantity"]); ?>"/></div>
        <div><span style="display:inline-block;width:150px;text-align:right;">提货时间：</span><input type="text" name="delivery_time" value="<?php echo ($attr["delivery_time"]); ?>"/></div>
        <div><span style="display:inline-block;width:150px;text-align:right;">结算单位：</span><input type="text" name="settle_company" value="<?php echo ($attr["settle_company"]); ?>"/></div>
        <a></a>
    </form>
    <button id="recive">接单</button>
    <a href="/index.php?c=driver&a=orderpool">返回</a>
</div>
<script src="/Public/jquery-3.3.1/jquery-3.3.1.js"></script>
<script src="/Public/js/dialog.js"></script>
<script src="/Public/dialog/layer.js"></script>
<script src="/Public/js/recive.js"></script>
</body>
</html>