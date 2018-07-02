$('.delete').click(function () {
    var id=$(this).parents("tr").children("td").eq(0).text();
    console.log(id);
    console.log('nihao')
    var url = "../Oil/delete";
    var data = {'id':id};
    // 执行异步请求  $.post
    $.post(url,data,function(result){
        if(result.status == 0) {
            return dialog.error(result.message);
        }
        if(result.status == 1) {
            return dialog.success(result.message, '../Oil/index');
        }
    },'JSON');

})

$('.change').click(function () {
    var id=$(this).parents("tr").children("td").eq(0).text();

    $(location).attr('href','/hongdi/db_carorder_system/tp/index.php/Home/Oil/update?id='+id);
})