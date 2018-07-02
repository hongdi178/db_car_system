<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <title>预约装车</title>
    <script type="text/javascript" src="/hongdi/db_carorder_system/tp/Public/html/js/flexible.js"></script>
    <link rel="stylesheet" type="text/css" href="/hongdi/db_carorder_system/tp/Public/html/css/yuyuezhuangche.css">


    <link rel="stylesheet" type="text/css" href="/hongdi/db_carorder_system/tp/Public/html/css/jquery-weui.min.css">
    <link rel="stylesheet" type="text/css" href="/hongdi/db_carorder_system/tp/Public/html/css/weui.min.css">

</head>
<style>
    .weui-mask.weui-mask--visible{
        opacity: 0.2;
    }
</style>
<body>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="main">
    <div class="con">
        <div class="line">
            <div class="null">
                <span class="yuan"></span>
            </div>

            <span class="Txt">真实姓名</span>
            <input type="text" class="weui-input" name="name" placeholder="请输入真实姓名" value="<?php echo ($vo["name"]); ?>">
        </div>
        <div class="line">
            <div class="null">
            </div>
            <span class="Txt">联系电话</span>
            <input type="tel" class="weui-input"  name="phone" placeholder="请输入联系电话" value="<?php echo ($vo["phone"]); ?>" maxlength="11">
        </div>

    </div>
    <div class="con">
        <div class="line ">
            <div class="null">
                <span class="yuan"></span>
            </div>
            <span class="Txt">油品类型</span>
            <div class="selLine weui-cell__bd">
                <select name="type" size="1" id="type" class="weui-select weui-cell__bd">
                    <option><?php echo ($oilFatherName); ?></option>
                    <?php if(is_array($oil)): foreach($oil as $key=>$v): ?><option value="<?php echo ($v['id']); ?>"><?php echo ($v["name"]); ?></option><?php endforeach; endif; ?>
                </select>
            </div>
            <div class="selLine weui-cell__bd">

                <select name="lable" size="1" id="lables" class="weui-select weui-cell__bd">
                     <OPTION><?php echo ($oilName); ?></OPTION>
                </select>
            </div>
        </div>
        <!-- <div class="line weui-cell__bd">
            <div class="null">
            </div>
            <span class="Txt">预约时间</span>
            <input type="date" class="weui-input" placeholder="请输入联系电话" v-model="time">
        </div> -->
            <div class="line">
                    <div class="null">
                    </div>
                    <span class="Txt">车牌号</span>
                    <div class="lineC-left" id="app">
                    
                        <div >
                            <select class="weui-select" style="width: 1rem;" id="first">
                                <option><?php echo ($first); ?></option>
                                <option v-for="province in provinces" v-bind:value="province">{{province}}</option>
                            </select>
                            <select class="weui-select" style="width: 1rem;" id="second">
                                <option><?php echo ($second); ?></option>
                                <option v-for="city in citys" v-bind:value="city">{{city}}</option>
                            </select>
                        </div>
                            <input type="text" class="weui-input" placeholder="请输入车牌号" v-model="plate" name="plateNumber" maxlength="5">
                    </div>
                </div>
        <div class="line">
            <div class="null">
            </div>
            <span class="Txt">公司名称</span>
            <input type="text" class="weui-input" name="company" placeholder="请输入公司名称" value="<?php echo ($vo["company"]); ?>">
        </div>
    </div>
    <div class="subBtn"  v-show="subDp">提交预约</div>
    <!-- <div class="boTxt" >
        <div class="gou">
            <span class="icon-ok"></span>

        </div>
        <p>您已提交预约信息，可在“排队查询”查看</p>
    </div> -->
    <div id="footer">
        <a href="<?php echo U('list/index');?>" >
            <img src="/hongdi/db_carorder_system/tp/Public/html/images/paiduichaxun.png" alt="">
            <p>排队查询</p>
        </a>
        <a href="<?php echo U('order/index');?>" class="on">
            <img src="/hongdi/db_carorder_system/tp/Public/html/images/yuyue2.png" alt="">
            <p>预约装车</p>
        </a>
        <a href="<?php echo U('my/page');?>">
            <img src="/hongdi/db_carorder_system/tp/Public/html/images/gerenzhongxin.png" alt="">
            <p>个人中心</p>
        </a>
    </div>
    <!-- <div class="pzCon" :style="{display:pzConDp}">
        <div class="pzCon-txt">
            <span >{{item}}</span>
            <p class="okBtn" @click="pzOk">
                完成
            </p>
        </div>
    </div> -->

    <div class="pzCon" :style="{display:pzConDp}">
        <div class="pzCon-txt">
            <span v-for="item in pzList" @click="selectedPz(item)">{{item}}</span>
            <p class="okBtn" @click="pzOk">
                完成
            </p>
        </div>
    </div>
    <div class="pzCon" :style="{display:pzEConDp}">
        <div class="pzCon-txt">
            <span v-for="item in eList" @click="selectedPzE(item)">{{item}}</span>
            <p class="okBtn" @click="pzEOk">
                完成
            </p>
        </div>
    </div>
</div><?php endforeach; endif; else: echo "" ;endif; ?>
</body>
<script type="text/javascript" src="/hongdi/db_carorder_system/tp/Public/html/js/vue.min.js"></script>
<script src="/hongdi/db_carorder_system/tp/Public/html/js/jquery.min weui.js"></script>
<script src="/hongdi/db_carorder_system/tp/Public/html/js/jquery-weui.min.js"></script>
<script src="/hongdi/db_carorder_system/tp/Public/html/js/information.js"></script>
<script src="/hongdi/db_carorder_system/tp/Public/js/dialog.js"></script>
<script src="/hongdi/db_carorder_system/tp/Public/dialog/layer.js"></script>
<script src="/hongdi/db_carorder_system/tp/Public/layui-v2.2.5/layui/layui.js" charset="utf-8"></script>
<script>
    var vm = new Vue({
    el: '#app',
    data:{
        chepai:'',
        provinces:[],
        citys:[],
        plate:<?php echo ($number); ?>
    },
    created: function () {
        // `this` 指向 vm 实例
        var province=['京', '津', '沪', '渝','冀', '豫','滇','辽','黑','湘','皖','鲁','新','苏','浙','赣','鄂','桂','甘','晋','蒙','陕','吉','闽','黔','粤','青','藏','蜀','宁','琼','台','港','澳'];
        for (var i=0;i<province.length;i++) {
            this.provinces.push(province[i]);
        }
        for (var i=0;i<26;i++){
            var letter=String.fromCharCode(65+i);
            this.citys.push(letter);
        }
    },
    methods: {
        commit: function () {
            alert('提交');
        }
    }
});

</script>
</html>