$('#back').click(function () {
    $(location).attr('href', '../List/index');
})
$('#confirm').click(function () {
    var rank =$('.rank').val();
    var updateRank =$('.updateRank').val();
    if(!updateRank){
          dialog.error("排位不能为空");
    }
    else if(updateRank==rank){
        dialog.error('排位不能相同');
    }
    else{
        var url = " ../List/updateRank";
        var data = {'rank':rank,'updateRank':updateRank};
        // 执行异步请求  $.post
        $.post(url,data,function(result){
            if(result.status == 0) {
                return dialog.error(result.message);
            }
            if(result.status == 1) {
                return dialog.success(result.message, '../List/index');
            }
        },'JSON');
    }

})

