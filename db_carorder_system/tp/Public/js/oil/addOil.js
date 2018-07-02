$("#submit").click(function () {
    var name=$('input[name="name"]').val();
    var id=$('input[name="id"]').val();
    console.log(name);
    if(!name){
        dialog.error("请输入名称");
    }
    else if(name.length>10){
        dialog.error("输入名称长度不能大于10")
    }
    else{
        var url = "../Oil/addOil";
        var data = {'name':name,'id':id};
        // 执行异步请求  $.post
        $.post(url,data,function(result){
            if(result.status == 0) {
                return dialog.error(result.message);
            }
            if(result.status == 1) {
                return dialog.success(result.message, '../Oil/index');
            }
        },'JSON');
    }
})