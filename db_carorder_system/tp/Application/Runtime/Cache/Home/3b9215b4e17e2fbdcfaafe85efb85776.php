<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div align="center">
    <form action="/index.php?c=car&a=update&id=<?php echo ($attr["id"]); ?>" method="post">
        <div>id：<input type="text" name="id" value="<?php echo ($attr["id"]); ?>" disabled/></div>
        <div>编号：<input type="text" name="number" value="<?php echo ($attr["number"]); ?>"/></div>
        <div>车牌号：<input type="text" name="plate_number" value="<?php echo ($attr["plate_number"]); ?>"/></div>
        <div>车架号：<input type="text" name="frame_number" value="<?php echo ($attr["frame_number"]); ?>"/></div>
        <input type="submit" value="修改"/>
        <a></a>
    </form>
</div>
</body>
</html>