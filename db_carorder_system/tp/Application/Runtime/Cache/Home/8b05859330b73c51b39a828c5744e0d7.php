<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

</head>
<body >
<div align="center">
    <h2 >后台中心</h2>
    <a href="<?php echo U('Home/Car/index');?>">车辆管理</a>
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
    <title>修改</title>
</head>
<body>
<div align="center">

    <span style="display:inline-block;width:160px;text-align:right; ">原先的排位是:</span>
    <input class="rank" value="<?php echo ($rank); ?>" disabled>
    <br/>
    <span style="display:inline-block;width:160px;text-align:right;">输入修改后的排位:</span>
    <input class="updateRank">

</div>
<div align="center">
    <button id="confirm">确定</button>
    <button id="back">取消</button>
</div>
<script src="/hongdi/db_carorder_system/tp/Public/jquery-3.3.1/jquery-3.3.1.js"></script>
<script src="/hongdi/db_carorder_system/tp/Public/js/dialog.js"></script>
<script src="/hongdi/db_carorder_system/tp/Public/dialog/layer.js"></script>
<script src="/hongdi/db_carorder_system/tp/Public/js/list/update.js"></script>
</body>
</html>