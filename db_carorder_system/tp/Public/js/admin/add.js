$("#submit").click(function () {
    var username =$('input[name="username"]').val();
    var password =$('input[name="password"]').val();
    var second =$('input[name="secondPassword"]').val();
    var id= $("#roleid option:selected").val();
    if(!username){
        dialog.error('请输入用户名');
    }
    else if(!password){
        dialog.error('请输入密码');
    }
    else if(!second)
    {
        dialog.error('请再次输入密码');
    }
    else if(password!==second){
        dialog.error('两次输入密码不同');
    }
    else if(id===0){
        dialog.error('请选择角色');
    }
    else{
        var url = "../admin/add";
        var data = {'username':username,'password':password,'id':id};
        // 执行异步请求  $.post
        $.post(url,data,function(result){
            if(result.status == 0) {
                return dialog.error(result.message);
            }
            if(result.status == 1) {
                return dialog.success(result.message, '../admin/manage');
            }
        },'JSON');
    }
})