$('#submit').click(function () {
    var message=$('#text').val();
        //console.log(message);
    var url = "../Announce/update";
    var data = {'message':message};
    // 执行异步请求  $.post
    if(!message){
        dialog.error("公告内容不能为空");
    }
    else{
        $.post(url,data,function(result){
            if(result.status == 0) {
                return dialog.error(result.message);
            }
            if(result.status == 1) {
                return dialog.success(result.message, '../Announce/index');
            }
        },'JSON');
    }

})
