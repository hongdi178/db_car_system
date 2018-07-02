<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <title>个人中心</title>
    <script type="text/javascript" src="/hongdi/db_carorder_system/tp/Public/html/js/flexible.js"></script>
    <link rel="stylesheet" type="text/css" href="/hongdi/db_carorder_system/tp/Public/html/css/myCenter.css">


    <link rel="stylesheet" type="text/css" href="/hongdi/db_carorder_system/tp/Public/html/css/jquery-weui.min.css">
    <link rel="stylesheet" type="text/css" href="/hongdi/db_carorder_system/tp/Public/html/css/weui.min.css">

</head>
<body>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="main">
        <div class="top">
            <div class="userInfo">
                <img src="<?php echo ($vo["head_img"]); ?>">
                <span><?php echo ($vo["nickname"]); ?></span>
            </div>
            <a href="<?php echo U('my/order');?>" class="l weui-cell__bd">我的预约记录</a>
        </div>

        <div class="carInfo">
                <?php if(($vo["rank"]) == "1"): ?><span class="num numIng" ><?php echo ($vo["rank"]); ?></span>
                    <span class="chepai"><?php echo ($vo["plate_number"]); ?></span>
                    <span class="statu ing" >正在装</span><?php endif; ?>
                <?php if(($vo["rank"]) == "2"): ?><span class="num numCq" ><?php echo ($vo["rank"]); ?></span>
                    <span class="chepai"><?php echo ($vo["plate_number"]); ?></span>
                    <span class="statu cq" >厂区待装</span><?php endif; ?>
                <?php if(($vo["rank"]) >= "3"): ?><span class="num" ><?php echo ($vo["rank"]); ?></span>
                    <span class="chepai"><?php echo ($vo["plate_number"]); ?></span>
                    <span class="statu " >厂外待装</span><?php endif; ?>

        </div>

        <div class="myIfo">
            <a href="index.html" class="l m weui-cell__bd">
                <span>我的信息</span>
                <span>去编辑</span>
            </a>
            <div class="line">
                <div class="line-left">
                    <span>真实姓名</span>
                    <p><?php echo ($vo["name"]); ?></p>
                </div>
                <div class="line-right">
                    <span>联系电话</span>
                    <p><?php echo ($vo["phone"]); ?></p>
                </div>
            </div>
            <div class="line">
                <div class="line-left">
                    <span>车牌号</span>
                    <p><?php echo ($vo["plate_number"]); ?></p>
                </div>
                <div class="line-right">
                    <span>公司名称</span>
                    <p><?php echo ($vo["company"]); ?></p>
                </div>
            </div>
        </div>

        <div class="contact">

            <a href="<?php echo U('my/contactUs');?>" class="weui-cell__bd">联系我们</a>
            <a href="<?php echo U('my/aboutUs');?>" class="weui-cell__bd">关于我们</a>

        </div>

        <div id="footer">
            <a href="<?php echo U('list/index');?>" >
                <img src="/hongdi/db_carorder_system/tp/Public/html/images/paiduichaxun.png" alt="">
                <p>排队查询</p>
            </a>
            <a href="<?php echo U('order/index');?>">
                <img src="/hongdi/db_carorder_system/tp/Public/html/images/yuyue.png" alt="">
                <p>预约装车</p>
            </a>
            <a href="page.html" class="on">
                <img src="/hongdi/db_carorder_system/tp/Public/html/images/gerenzhongxin2.png" alt="">
                <p>个人中心</p>
            </a>
        </div>

    </div><?php endforeach; endif; else: echo "" ;endif; ?>

</body>
<script type="text/javascript" src="/hongdi/db_carorder_system/tp/Public/html/js/vue.min.js"></script>
<script src="/hongdi/db_carorder_system/tp/Public/html/js/jquery.min weui.js"></script>
<script src="/hongdi/db_carorder_system/tp/Public/html/js/jquery-weui.min.js"></script>
<script src="/hongdi/db_carorder_system/tp/Public/html/js/order.js"></script>
<script src="/hongdi/db_carorder_system/tp/Public/js/dialog.js"></script>
<script src="/hongdi/db_carorder_system/tp/Public/dialog/layer.js"></script>
<script src="/hongdi/db_carorder_system/tp/Public/layui-v2.2.5/layui/layui.js" charset="utf-8"></script>

</html>