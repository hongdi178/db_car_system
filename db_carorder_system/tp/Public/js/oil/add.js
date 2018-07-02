$("#submit").click(function () {
    var name=$('input[name="name"]').val();
    console.log(name);
    if(!name){
        dialog.error("请输入名称");
    }
    else if(name.length>10){
        dialog.error("输入名称长度不能大于10")
    }
    else{
        var url = "../Oil/add";
        var data = {'name':name};
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