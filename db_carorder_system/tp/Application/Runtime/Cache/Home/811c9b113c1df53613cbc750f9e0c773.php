<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>

<body>
<div align="center">
    <h2>用户中心</h2>


            <p>欢迎用户：<?php echo ($name); ?></p>


    <a href="/index.php?c=driver&a=orderpool">公共订单池</a>
    <a href="/index.php?c=driver&a=personcenter">个人中心</a>
    <a href="/index.php?c=driver&a=personorder">个人订单</a>
</div>
<div align="center">
    <a href="/index.php">退出</a>
</div>
</body>
</html>