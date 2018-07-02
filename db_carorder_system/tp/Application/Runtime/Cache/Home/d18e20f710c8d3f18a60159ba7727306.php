<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div align="center">
    <h1>送达信息填写</h1>
</div>
<div align="center">
    <div align="center" >
        <label >订单号</label>
        <input id="id" value="<?php echo ($id); ?>" disabled>
    </div>
    <label>商品实际数量</label>
    <input id="quantity" name="real_quantity"/>
    <div><button id="button" name="real_quantity">确定</button></div>
</div>
<div align="center">
    <a href="/index.php?c=driver&a=order">返回</a>
</div>
<script src="/Public/jquery-3.3.1/jquery-3.3.1.js"></script>
<script src="/Public/js/dialog.js"></script>
<script src="/Public/dialog/layer.js"></script>
<script src="/Public/js/arrive.js"></script>
<script src="/Public/layui-v2.2.5/layui/layui.js" charset="utf-8"></script>
</body>
</html>