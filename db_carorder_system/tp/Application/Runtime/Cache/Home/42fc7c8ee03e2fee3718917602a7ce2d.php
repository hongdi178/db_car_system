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
    <title>车辆队列</title>
</head>
<body>
<div align="center">
    订单状态：
    <select class="select">
        <option value="0">请选择</option>
        <option value="1">已装</option>
        <option value="2">装车中</option>
        <option value="3">厂区内待装</option>
        <option value="4">厂外待转</option>
        <option value="5">全部</option>
    </select>
    <div>
        <label >创建时间选择</label>
        <input id="test" size="40px">
    </div>
    <button   id="button">生成excel</button>
</div>
<div align="center">

    <button id="add">添加车辆</button>


        <?php if(($status) == "1"): ?><button style="background-color: #0bb20c" id="cancel">取消暂停</button><?php endif; ?>

        <?php if(($status) == "0"): ?><button style="background-color: #0bb20c" id="pause">暂停全部车辆</button><?php endif; ?>


</div>
<table border="1" align="center">
    <tr>

        <th>订单编号</th>
        <th>车牌号</th>
        <th>排序</th>
        <th>真实姓名</th>
        <th>公司</th>
        <th>电话号码</th>
        <th>创建时间</th>
        <th>状态</th>
        <th>更新时间</th>
        <th>删除时间</th>
        <th>操作</th>
    </tr>
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($vo["order_number"]); ?></td>
            <td><?php echo ($vo["plate_number"]); ?></td>
            <td><?php echo ($vo["rank"]); ?></td>
            <td><?php echo ($vo["name"]); ?></td>
            <td><?php echo ($vo["company"]); ?></td>
            <td><?php echo ($vo["phone"]); ?></td>
            <td><?php echo ($vo["create_time"]); ?></td>
            <?php if(($vo["rank"]) == "0"): ?><td>已装</td><?php endif; ?>
            <?php if(($vo["rank"]) == "1"): ?><td>装车中</td><?php endif; ?>
            <?php if(($vo["rank"]) == "2"): ?><td>厂区内待装</td><?php endif; ?>
            <?php if(($vo["rank"]) >= "3"): ?><td>厂外待装</td><?php endif; ?>
            <td><?php echo ($vo["update_time"]); ?></td>
            <td><?php echo ($vo["delete_time"]); ?></td>
            <td>
                <button style="background-color:#F00" class="delete">删除</button>
                <button class="update">修改</button>
                <?php if(($vo["rank"]) == "1"): ?><button class="complete">完成</button><?php endif; ?>
            </td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<script src="/Public/jquery-3.3.1/jquery-3.3.1.js"></script>
<script src="/Public/js/dialog.js"></script>
<script src="/Public/dialog/layer.js"></script>
<script src="/Public/js/list/index.js"></script>
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