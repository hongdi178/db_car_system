$("#xiugai").click(function () {
    var password = $('input[name="password"]').val();
    var firstpassword = $('input[name="firstpassword"]').val();
    var secondpassword=$('input[name="secondpassword"]').val();
    if(!password) {
        dialog.error('密码不能为空');
    }
    else if(!firstpassword) {
        dialog.error('请输入修改后的密码');
    }

    else if(!secondpassword){
        dialog.error('请再输入一次密码');
    }
    var url = "./index.php?c=driver&a=changepassword";
    var data = {'password':firstpassword};
    // 执行异步请求  $.post
    $.post(url,data,function(result){
        if(result.status == 0) {
            return dialog.error(result.message, './index.php?c=driver&a=index');
        }
        if(result.status == 1) {
            return dialog.success(result.message, './index.php?c=driver&a=index');
        }
    },'JSON');

});