$("#button").click(function () {
    $(location).attr('href', '/hongdi/db_carorder_system/tp/index.php/Home/User/index');
})
$("#change").click(function () {
    //var nickname=$("input[name='nickname']");
    var name=$("input[name='name']").val();
    var phone=$("input[name='phone']").val();
    var plate_number=$("input[name='plate_number']").val();
    var company=$("input[name='company']").val();
    var id=$("input[name='id']").val();
    if(!name){
        dialog.error("请输入姓名");
    }
    else if(name.length>10){
        dialog.error("真实姓名长度不能大于10");
    }
    else if(phone.length!==11){
        dialog.error("手机号吗长度应该为11");
        console.log(phone.length);
    }
    else if(plate_number.length!==7){
        dialog.error("车牌号码长度应该为7");
        console.log(plate_number.length);
    }
    else if(!company){
        dialog.error("请输入公司名称")
    }
    else if(company>10){
        dialog.error("公司名称不能大于10");
    }
    else{
        var url = "../user/update";
        var data = {'name':name,'phone':phone,'plate_number':plate_number,'company':company,'id':id};
        // 执行异步请求  $.post
        $.post(url,data,function(result){
            if(result.status == 0) {
                return dialog.error(result.message);
            }
            if(result.status == 1) {
                return dialog.success(result.message, '/hongdi/db_carorder_system/tp/index.php/Home/User/index');
            }
        },'JSON');
    }
})

