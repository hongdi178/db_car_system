$('#type').click(function(){
        $(this).change(function(){
            var objectModel = {};
            var   value = $(this).val();
            var   type = $(this).attr('id');
            objectModel[type] =value;
            $.ajax({
                cache:false,
                type:"POST",
                url:"/hongdi/db_carorder_system/tp/index.php/Html/Order/oil",
                dataType:"json",
                data:objectModel,
                timeout:30000,
                error:function(){
                    alert("lable");
                },
                success:function(data){
                    $("#lables").empty();
                    var count = data.length;
                    var i = 0;
                    var b="";
                    for(i=0;i<count;i++){
                        b+="<option value='"+data[i].father_id+"' >"+data[i].name+"</option>";
                    }
                    var c="<option>请选择</option>";
                    $("#lables").append(c);
                    $("#lables").append(b);
                }
            });
        });
    }
);
$(".subBtn").click(function () {
        var name=$('input[name="name"]').val();
        var phone=$('input[name="phone"]').val();
        var oilFather=$('select#type').find("option:selected").text();
        var oil=$('select#lables').find("option:selected").text();
        var plateNumber=$('input[name="plateNumber"]').val();
        var company=$('input[name="company"]').val();

        if(!name) {
            dialog.error("真实姓名不能为空");
        }
        else if(!phone) {
            dialog.error("联系电话不能为空");
        }
        else if(name.length>10){
            dialog.error("姓名长度不能大于10位")
        }
        else if(phone.length!==11){
            dialog.error("手机号码长度应该为11位");
        }
        else if(!oil) {
            dialog.error("油品类型不能为空");
        }
        else if(!oilFather){
            dialog.error("油品类型不能为空");
        }
        else if(!plateNumber){
            dialog.error("车牌号不能为空");
        }
        else if(plateNumber.length!==5){
            dialog.error("车牌号的数字位长度为5位")
        }

        else if(!company){
            dialog.error("公司名不能为空");
        }
        else if(company.length>10){
            dialog.error("公司名长度不能大于10位")
        }
        else{
            var url = "/hongdi/db_carorder_system/tp/index.php/HTML/Order/addOrder";
            var data = {'name':name,'phone':phone,'oilFather':oilFather,'oil':oil,'car_plate_number':plateNumber,'company':company};
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

});

$(".icon-search").click(function () {
    //var fOil =$('select#type').find("option:selected").text();
    //var oil  =$('select#lables').find("option:selected").text();
    var text =$('input#input').val();
    console.log(text);
    console.log('1');
    $(location).attr('href','/hongdi/db_carorder_system/tp/index.php/Html/List/selectOrder?text='+text);

})
$('#lables').change(function () {
    var oil=$("#lables").find("option:selected").text();
    console.log(oil);
    console.log(2);
    $(location).attr('href','/hongdi/db_carorder_system/tp/index.php/Html/List/selectOil?oil='+oil);
})

