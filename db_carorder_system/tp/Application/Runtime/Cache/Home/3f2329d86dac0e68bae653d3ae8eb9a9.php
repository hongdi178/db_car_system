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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div align="center">
        <form>
            <div>
                <span style="display:inline-block;width:150px;text-align:right;">用户id：</span>
                <input type="text" name="id" value="<?php echo ($list[0][id]); ?>" id="id" disabled  />
                <br>
                <span style="display:inline-block;width:150px;text-align:right;">用户名：</span>
                <input type="text" name="id" value="<?php echo ($list[0][name]); ?>" id="name"  />
                <br>
                <span style="display:inline-block;width:150px;text-align:right;">密码：</span>
                <input type="password" name="number"  id="password" />
                <br>
                <span style="display:inline-block;width:150px;text-align:right;">请再次输入密码：</span>
                <input type="password" name="plate_number" id="second" />
                <br>
                角色类型：<select id="roleid">
                    <option value="<?php echo ($list[0][role_id]); ?>"><?php echo ($list[0][roleName]); ?></option>
                    <?php if(is_array($role)): $i = 0; $__LIST__ = $role;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['id']); ?>" ><?php echo ($vo["name"]); ?> </option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
        </form>
    <button id="submit">确认</button>
    <button id="back">返回</button>
</div>
</body>
<script src="/Public/jquery-3.3.1/jquery-3.3.1.js"></script>
<script src="/Public/layui-v2.2.5/layui/layui.js" charset="utf-8"></script>
<script src="/Public/js/dialog.js"></script>
<script src="/Public/dialog/layer.js"></script>
<script src="/Public/js/admin/update.js"></script>

</html>