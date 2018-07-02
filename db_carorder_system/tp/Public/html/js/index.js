$('.subBtn').click(function () {
    var name=$('input#name').val();
    var phone=$('input#phone').val();
    var car_plate_number=$('input#car_plate_number').val();
    var company=$('input#company').val();
    //console.log(name,phone,car_plate_number,company);
    if(!name){
        dialog.error("姓名不能为空");
    }
    else if(!phone){
        dialog.error("电话号码不能为空");
    }
    else if(!car_plate_number){
        dialog.error("车牌号不能为空")
    }
    else if(!company){
        dialog.error("公司名不能为空");
    }
    else{
        var url = "/hongdi/db_carorder_system/tp/index.php/HTML/My/change";
        var data = {'name':name,'phone':phone,'car_plate_number':car_plate_number,'company':company};
        // 执行异步请求  $.post
        $.post(url,data,function(result){
            if(result.status == 0) {
                return dialog.error(result.message);
                console.log("error")
            }
            if(result.status == 1) {
                return dialog.success(result.message, '/hongdi/db_carorder_system/tp/index.php/HTML/Order/index');
                console.log("succes")
            }
        },'JSON');
    }
})