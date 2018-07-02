$('.delete').click(function () {
    var rank=$(this).parents("tr").children("td").eq(2).text();
    console.log(rank);

    var url = "../List/delete";
    var data = {'rank':rank};
    // 执行异步请求  $.post
    $.post(url,data,function(result){
        if(result.status == 0) {
            return dialog.error(result.message);
        }
        if(result.status == 1) {
            return dialog.success(result.message, '../List/index');
        }
    },'JSON');
})

$('.update').click(function () {
    var rank=$(this).parents("tr").children("td").eq(2).text();
    console.log(rank);
    $(location).attr('href', '../List/update?rank='+rank);
})
$('#pause').click(function () {
    var url = "../List/pause";

    var data ={'status':1}
    $.post(url,data,function(result){
        if(result.status == 0) {
            return dialog.error(result.message);
        }
        if(result.status == 1) {
            return dialog.success(result.message, '../List/index');
        }
    },'JSON');
})

$('#cancel').click(function () {
    console.log('he');
    var url = "../List/cancel";

    var data ={'status':1}
    $.post(url,data,function(result){
        if(result.status == 0) {
            return dialog.error(result.message);
        }
        if(result.status == 1) {
            return dialog.success(result.message, '../List/index');
        }
    },'JSON');
})
$('#add').click(function () {
    $(location).attr('href', '../List/add');
})
$('.complete').click(function () {
    var rank=$(this).parents("tr").children("td").eq(2).text();

    var url = "../List/complete";
    console.log('he');
    var data ={'rank':rank};
    $.post(url,data,function(result){
        if(result.status == 0) {
            return dialog.error(result.message);
        }
        if(result.status == 1) {
            return dialog.success(result.message, '../List/index');
        }
    },'JSON');
})

$("#button").click(function () {
    var time=$('#test').val();
    var begintime=time.substring(0,20);
    var finaltime=time.substring(21,41);
    console.log(begintime);
    console.log(finaltime);
    if(!begintime){
        return dialog.error('请选择时间');
    }
    else{
        console.log(time);
        console.log(begintime);
        console.log(finaltime);
        $(location).attr("href","../List/timeout?begintime="+begintime+"&finaltime="+finaltime);

    }
})
$(".select").change(function () {
    var status=$(".select option:selected").val();//0是未接单，1是已接单，2是已结束
    console.log(status);
    $(location).attr("href","../List/select?status="+status );

})

