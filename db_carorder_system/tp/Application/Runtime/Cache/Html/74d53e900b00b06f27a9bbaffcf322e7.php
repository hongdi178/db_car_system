<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <title>我的信息</title>
    <script type="text/javascript" src="/hongdi/db_carorder_system/tp/Public/html/js/flexible.js"></script>
    <link rel="stylesheet" type="text/css" href="/hongdi/db_carorder_system/tp/Public/html/css/myInfo.css">


    <link rel="stylesheet" type="text/css" href="/hongdi/db_carorder_system/tp/Public/html/css/jquery-weui.min.css">
    <link rel="stylesheet" type="text/css" href="/hongdi/db_carorder_system/tp/Public/html/css/weui.min.css">

</head>
<body>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="main">
        <div class="con">
            <div class="line">
                <span>真实姓名</span>
                <input type="text"  class="weui-input" value="<?php echo ($vo["name"]); ?>" id="name">
            </div>
            <div class="line">
                <span>联系电话</span>
                <input type="tel"  class="weui-input"  value="<?php echo ($vo["phone"]); ?>" id="phone">
            </div>
            <div class="line">
                <span>车牌号</span>
                <input type="text"  class="weui-input"  value="<?php echo ($vo["plate_number"]); ?>" id="car_plate_number">
            </div>
            <div class="line">
                <span>公司名称</span>
                <input type="text"  class="weui-input"  value="<?php echo ($vo["company"]); ?>" id="company">
            </div>
        </div>
        <div class="subBtn">确定修改</div>
    </div><?php endforeach; endif; else: echo "" ;endif; ?>

</body>
<script type="text/javascript" src="/hongdi/db_carorder_system/tp/Public/html/js/vue.min.js"></script>
<script src="/hongdi/db_carorder_system/tp/Public/html/js/jquery.min weui.js"></script>
<script src="/hongdi/db_carorder_system/tp/Public/html/js/jquery-weui.min.js"></script>
<script src="/hongdi/db_carorder_system/tp/Public/html/js/index.js"></script>
<script src="/hongdi/db_carorder_system/tp/Public/js/dialog.js"></script>
<script src="/hongdi/db_carorder_system/tp/Public/dialog/layer.js"></script>
<script src="/hongdi/db_carorder_system/tp/Public/layui-v2.2.5/layui/layui.js" charset="utf-8"></script>
</html>