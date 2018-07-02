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
    <title>添加车辆</title>
</head>
<body>
<div align="center">
    用户名：<select>
        <option>---请选择---</option>
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
    </select>

</div>

<div align="center">
    <button id="add">添加</button><button id="back">返回</button>
</div>
<script src="/Public/jquery-3.3.1/jquery-3.3.1.js"></script>
<script src="/Public/js/dialog.js"></script>
<script src="/Public/dialog/layer.js"></script>
<script src="/Public/js/list/add.js"></script>
</body>
</html>