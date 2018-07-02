$("#button").click(function () {
    var real_quantity=$("#quantity").val();
    var id=$("#id").val();
    if(!real_quantity){
        alert("商品实际数量不能为空")
    }
    else{
        var url = "../Driver/arrive";
        var data = {'real_quantity':real_quantity,'id':id};
        // 执行异步请求  $.post
        $.post(url,data,function(result){
            if(result.status == 0) {
                return dialog.error(result.message, '../Driver/index');
            }
            if(result.status == 1) {
                return dialog.success(result.message, '/Driver/index');
            }
        },'JSON');
    }
})
