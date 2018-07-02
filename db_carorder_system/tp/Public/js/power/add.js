$('#submit').click(function(){
    var name=$('#name').val();
    var user=$('#user').prop('checked');
    var password=$('#password').prop('checked');
    var operate=$('#operate').prop('checked');
    var admin=$('#admin').prop('checked');
    var oil=$('#oil').prop('checked');
    var list=$('#list').prop('checked');
    var power=$('#power').prop('checked');
    var announce=$('#announce').prop('checked');
    var action='';
    if(!name){
        dialog.error("请填写角色名");
    }
    else if(!(password||operate||admin||oil||list||power||announce)){
        dialog.error("至少选择一个权限");
    }
    else{
        if(user){
            user="1";
            action+=user;
            action+=';';
        }

        if(password){
            password="2";
            action+=password;
            action+=';';
        }

        if(operate){
            operate='3';
            action+=operate;
            action+=';'
        }

        if(admin){
            admin='4';
            action+=admin;
            action+=';'
        }

        if(oil){
            oil='5';
            action+=oil;
            action+=';'
        }

        if(list){
            list='6';
            action+=list;
            action+=';'
        }

        if(power){
            power='7';
            action+=power;
            action+=';'
        }

        if(announce){
            announce='8';
            action+=announce;
            action+=';'
        }
        console.log(name,user,operate,admin,oil,list,power,announce);
        var url = "../power/add";
        console.log(action);
        var data = {'password':password,'name':name,'user':user,'operate':operate,'admin':admin,'oil':oil,'list':list,'power':power,'announce':announce,'action':action};
        // 执行异步请求  $.post
        $.post(url,data,function(result){
            if(result.status == 0) {
                return dialog.error(result.message);
            }
            if(result.status == 1) {
                return dialog.success(result.message, '../power/index');
            }
        },'JSON');
    }

})
