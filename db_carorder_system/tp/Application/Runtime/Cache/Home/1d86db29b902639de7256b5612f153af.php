<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div align="center">
    <h2>个人密码修改</h2>
</div>
<div>
    <div align="center">
        <form  method="post"  >
            请输入原来的密码：
            <input type="text" name="password" maxlength="20" >
            <br>
            修改后的密码：
            <input type="password" name="firstpassword" maxlength="20">
            <br>
            再输入一次
            <input type="password" name="secondpassword" maxlength="20">
            <br>
            <button type="button" id="xiugai">修改</button>
            <a href="/index.php?c=driver&a=personcenter">返回</a>
        </form>
    </div>
</div>
<script src="/Public/jquery-3.3.1/jquery-3.3.1.js"></script>
<script src="/Public/js/dialog.js"></script>
<script src="/Public/dialog/layer.js"></script>
<script src="/Public/js/driverpassword.js"></script>
</body>
</html>