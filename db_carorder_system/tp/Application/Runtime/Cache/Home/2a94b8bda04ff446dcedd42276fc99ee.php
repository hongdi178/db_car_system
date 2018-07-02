<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Title</title>
    <meta charset="UTF-8">
</head>
<body>
<center>
    <h2 class="textContent">车辆预约系统</h2>
    <form  method="post"  >
        账号：
        <input type="text" name="username" maxlength="20" >
        <br>
        密码：
        <input type="password" name="password" maxlength="20">
        <br>
        <button type="button" onclick="login.check()">登陆</button>
    </form>
</center>
</body>
<script src="/Public/js/login.js"> </script>
<script src="/Public/jquery-3.3.1/jquery-3.3.1.js"></script>
<script src="/Public/js/dialog.js"></script>
<script src="/Public/dialog/layer.js"></script>
</html>