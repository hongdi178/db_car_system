$("#submit").click(function(){
    $(location).attr('href','../power/add')
})
$('.delete').click(function () {
    var id=$(this).parents("tr").children("td").eq(0).text();
    console.log(id);

    var url = "../Power/delete";
    var data = {'id':id};
    // 执行异步请求  $.post
    $.post(url,data,function(result){
        if(result.status == 0) {
            return dialog.error(result.message);
        }
        if(result.status == 1) {
            return dialog.success(result.message, '../power/index');
        }
    },'JSON');
})
$('.update').click(function () {
    var id=$(this).parents("tr").children("td").eq(0).text();
    console.log(id);
    $(location).attr('href','../Power/update?id='+id);
})