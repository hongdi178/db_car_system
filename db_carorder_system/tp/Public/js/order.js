$("#submit").click(function () {
    var order_number = $('input[name="order_number"]').val();
    var destination = $('input[name="destination"]').val();
    var goods_name=$('input[name="goods_name"]').val();
    var delivery_quantity=$('input[name="delivery_quantity"]').val();
    var departure_time=$('input[name="departure_time"]').val();

     if(!destination) {
        alert('目的地不能为空');
    }
    else if(!goods_name){
        alert('商品名不能为空');
    }
    else if(!delivery_quantity){
        alert('商品数量不能为空');
    }
    else if(!departure_time){
        alert('出发时间不能为空');
    }
    else{
        var url = "/index.php?c=order&a=add";
        var data = {'destination':destination,'order_number':order_number,' goods_name': goods_name,'delivery_quantity':delivery_quantity,'departure_time':departure_time};
        // 执行异步请求  $.post
        $.post(url,data,function(result){
            if(result.status == 0) {
                alert('订单生成失败')
                return dialog.error(result.message, './index.php?c=order&a=add');
            }
            if(result.status == 1) {
                alert('订单生成成功')
                window.location.href='./index.php?c=order&a=index';
            }
        },'JSON');
    }

})
$(".select").change(function () {
       var status=$(".select option:selected").val();//0是未接单，1是已接单，2是已结束
        console.log(status);
       $(location).attr("href","./index.php?c=order&a=select&status="+status);

})

$("#button").click(function () {
        var time=$('#test').val();
        var begintime=time.substring(0,20);
        var finaltime=time.substring(21,41);
        if(!begintime){
            alert("请选择时间");
        }
        else{
            console.log(time);
            console.log(begintime);
            console.log(finaltime);
            $(location).attr("href","./index.php?c=order&a=timeout&begintime="+begintime+"&finaltime="+finaltime);

        }
})
$(".back").click(function () {
    $(location).attr('href','./index.php?c=order&a=index');

})