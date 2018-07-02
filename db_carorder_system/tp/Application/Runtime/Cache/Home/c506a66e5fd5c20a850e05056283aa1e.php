<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

</head>
<body >
<div align="center">

        <?php if(($power['0']) == "1"): ?><a href="<?php echo U('Home/User/index');?>">用户管理</a><?php endif; ?>
        <?php if(($power['1'] ) == "2"): ?><a href="<?php echo U('Home/Index/password');?>">修改密码</a><?php endif; ?>
            <?php if(($power['2']) == "3"): ?><a href="<?php echo U('Home/Operate/index');?>">操作日志</a><?php endif; ?>
                <?php if(($power['3']) == "4"): ?><a href="<?php echo U('Home/Admin/manage');?>">管理员管理</a><?php endif; ?>
                    <?php if(($power['4']) == "5"): ?><a href="<?php echo U('Home/Oil/index');?>">油品类型管理</a><?php endif; ?>
                        <?php if(($power['5']) == "6"): ?><a href="<?php echo U('Home/List/index');?>" >车辆队列管理</a><?php endif; ?>
                            <?php if(($power['6']) == "7"): ?><a href="<?php echo U('Home/Power/index');?>">权限管理</a><?php endif; ?>
                                <?php if(($power['7']) == "8"): ?><a href="<?php echo U('Home/Announce/index');?>">公告内容管理</a><?php endif; ?>
</div>
<div align="center">
    <h2 >后台中心</h2>
    <button id="quit">退出</button>
    <button><a href="<?php echo U('Home/Admin/index');?>">首页</a></button>
</div>
<hr />

</body>
<script src="/Public/jquery-3.3.1/jquery-3.3.1.js"></script>
<script src="/Public/layui-v2.2.5/layui/layui.js" charset="utf-8"></script>
<script src="/Public/js/dialog.js"></script>
<script src="/Public/dialog/layer.js"></script>
<script src="/Public/js/admin/index.js"></script>
</html>