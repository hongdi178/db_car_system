$("#xiugai").click(function () {
    // 获取登录页面中的用户名 和 密码
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
    else{
        var url = "/index.php?c=password&a=change";
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
    }

});
$("#button").click(function () {

    var beginmonth=$("#test").val();
    if(!beginmonth){
        alert('请选择日期');
    }
    else{
        console.log(beginmonth)
        var begin=beginmonth.substring(0,7);
        var ending=beginmonth.substring(10,17);
        console.log(begin);
        console.log(ending);
        $(location).attr("href","./index.php?c=driver&a=select&begin="+begin+"&ending="+ending);

    }
})
