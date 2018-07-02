<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div align="center">
    <h2>个人信息</h2>
    <div>姓名：<?php echo ($name); ?></div>
    <div>手机号:<?php echo ($phone); ?></div>
    <a href="/index.php?c=driver&a=personcenter">返回</a>
</div>
</body>
</html>