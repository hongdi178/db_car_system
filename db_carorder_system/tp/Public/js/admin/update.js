$('#back').click(function () {
    $(location).attr('href','../admin/manage')
})
$('#submit').click(function () {
    var id=$('#id').val();
    var name=$('#name').val();
    var password=$('#password').val();
    var second=$('#second').val();
    var roleId= $("#roleid option:selected").val();
    if(!password){
        alert('请输入密码')
    }
    else if(!second){
        alert('请再次输入密码');
    }
    else if(password!==second){
        alert('请输入两个相同的密码');
    }
    else if(!roleId){
        dialog.error('请选择角色');
    }
    else{
        var url = "../admin/updateAction";
        var data = {'name':name,'password':password,'id':id,'roleId':roleId};
        console.log(roleId);
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