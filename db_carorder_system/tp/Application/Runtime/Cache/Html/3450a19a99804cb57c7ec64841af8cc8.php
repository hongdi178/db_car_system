<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <title>预约记录</title>
    <script type="text/javascript" src="/hongdi/db_carorder_system/tp/Public/html/js/flexible.js"></script>
    <link rel="stylesheet" type="text/css" href="/hongdi/db_carorder_system/tp/Public/html/css/yuyuejilu.css">


    <link rel="stylesheet" type="text/css" href="/hongdi/db_carorder_system/tp/Public/html/css/jquery-weui.min.css">
    <link rel="stylesheet" type="text/css" href="/hongdi/db_carorder_system/tp/Public/html/css/weui.min.css">

</head>
<body>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="main">
        <!--    <div class="line">
                <div class="lineTop">
                    <span class="time">2018-05-11</span>
                    <span class="statu ing">正在装</span>

                </div>
                <div class="lineCon">
                    <span class="lineCon-left">油品类型</span>
                    <span class="lineCon-right">油品类</span>
                </div>
                <div class="lineCon">
                    <span class="lineCon-left">车牌号码</span>
                    <span class="lineCon-right">粤AE86</span>
                </div>
                <div class="lineCon">
                    <span class="lineCon-left">公司名称</span>
                    <span class="lineCon-right">测试公司</span>
                </div>
                <div class="lineCon">
                    <span class="lineCon-left">真实姓名</span>
                    <span class="lineCon-right">测试者</span>
                </div>
                <div class="lineCon">
                    <span class="lineCon-left">联系电话</span>
                    <span class="lineCon-right">181026601231</span>
                </div>
            </div>-->
        <div class="line">
            <div class="lineCon">
                 <?php if(($vo["rank"]) == "0"): ?><span class="num numIng" ><?php echo ($vo["rank"]); ?></span>
                    <span class="chepai"><?php echo ($vo["plate_number"]); ?></span>
                    <span class="statu ing" >已完成</span><?php endif; ?>
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
            <div class="lineCon">
                <span class="lineCon-left">排序</span>
                <span class="lineCon-right"><?php echo ($vo["rank"]); ?></span>
            </div>
            <div class="lineCon">
                <span class="lineCon-left">油品类型</span>
                <span class="lineCon-right"><?php echo ($vo["oilName"]); ?></span>
            </div>
            <div class="lineCon">
                <span class="lineCon-left">车牌号码</span>
                <span class="lineCon-right"><?php echo ($vo["plate_number"]); ?></span>
            </div>
            <div class="lineCon">
                <span class="lineCon-left">公司名称</span>
                <span class="lineCon-right"><?php echo ($vo["company"]); ?></span>
            </div>
            <div class="lineCon">
                <span class="lineCon-left">真实姓名</span>
                <span class="lineCon-right"><?php echo ($vo["name"]); ?></span>
            </div>
            <div class="lineCon">
                <span class="lineCon-left">联系电话</span>
                <span class="lineCon-right"><?php echo ($vo["phone"]); ?></span>
            </div>
        </div>
    </div><?php endforeach; endif; else: echo "" ;endif; ?>

</body>
<script type="text/javascript" src="/hongdi/db_carorder_system/tp/Public/html/js/vue.min.js"></script>

</html>