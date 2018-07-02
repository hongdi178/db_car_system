$("#xiugai").click(function () {
    // 获取登录页面中的用户名 和 密码
    var password = $('input[name="password"]').val();
    var firstpassword = $('input[name="firstpassword"]').val();
    var secondpassword=$('input[name="secondpassword"]').val();
    if(!password) {
        dialog.error('密码不能为空');
    }
    else if(password.length>10){
        dialog.error('密码长度不能大于10');
    }
    else if(!firstpassword) {
        dialog.error('请输入修改后的密码');
    }
    else if(firstpassword.length>10){
        dialog.error('修改后的密码不能大于10');
    }
    else if(!secondpassword){
        dialog.error('请再输入一次密码');
    }
    else if(firstpassword!=secondpassword){
        dialog.error('两次密码输入不一样');
    }
    else{
        var url = "/hongdi/db_carorder_system/tp/index.php/Home/password/change";
        var data = {'firstpassword':firstpassword ,'password':password};
        // 执行异步请求  $.post
        $.post(url,data,function(result){
            if(result.status == 0) {
                return dialog.error(result.message);
            }
            if(result.status == 1) {
                return dialog.success(result.message, '/hongdi/db_carorder_system/tp/index.php/Home');
            }
        },'JSON');
    }
});
