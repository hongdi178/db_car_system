<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/27
 * Time: 17:45
 */

//返回json格式的数据 微信借口使用这个方法

//验证签名
function checkSignature(){
    $signature = $_GET["signature"];
    $timestamp = $_GET["timestamp"];
    $nonce = $_GET["nonce"];
    $token = "hongdi";
    $tmpArr = array($token, $timestamp, $nonce);
    sort($tmpArr);
    $tmpStr = implode($tmpArr);
    $tmpStr = sha1($tmpStr);
    $echostr = $_GET['echostr'];
    if ($tmpStr == $signature) {
        echo $echostr;
    } else {
        return false;
    }
}
function getCode()
{
    $appID = 'wxb36891e3cb914461';
    //用户同意授权后回调的网址.必须使用url对回调网址进行编码，我们也将授权完跳转对网址,
    $redirect_uri = urlencode('http://yijiangbangtest.wsandos.com/hongdi/db_carorder_system/tp/html/index/getUserInfo');
    $url = 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=' . $appID . '&redirect_uri=' . $redirect_uri . '&response_type=code&scope=snsapi_userinfo&state=1#wechat_redirect';
    header("Location:" . $url);
}
function getJson($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return json_decode($output, true);
}

function sendTemplate($openid,$order_status,$oil_type,$plate,$company,$phone){
    //从数据库查看是否存在access_token
    $ret=M('token')->where("id=1")->select();
    //数据库查询无结果 获取access_token并存入
    if (!$ret){
        $access_token=getJson("https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".C('appID')."&secret=".C('appsecret'));
        //获得access_token
        $data=array();
        $data['appid']=C('appID');
        $data['access_token']=$access_token["access_token"];
        date_default_timezone_set("Asia/Shanghai");
        $data['time']=date("Y-m-d H:i:s");
        M('token')->add($data);
        //print_r('没有access_token');die;
    }else{
        $time=$ret[0]['time'];

        $time_n=date('Y-m-d H:i:s',time()-7200);
        //access_token过期，获取access_token并更新
        if ($ret[0]['access_token']==""||$time<$time_n){
            $access_token=getJson("https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".C('appID')."&secret=".C('appsecret'));
            $data=array();
            $data['appid']=C('appID');
            $data['access_token']=$access_token["access_token"];
            date_default_timezone_set("Asia/Shanghai");
            $data['time']=date("Y-m-d H:i:s");
            M('token')->where("id=1")->save($data);
            //print_r('access_token过期ss');die;
        }else{
            $access_token=$ret[0]['access_token'];
        }
    }
    //模板消息
    $template=array(
        'touser'=>$openid,
        'template_id'=>'VnxnXZURqrxH1MDiCVzQnuB7Dedr0tRaGnFXX1PZIT4',
        //'url'=>C('url')."/laijunqiang/vehicle_reservation_system/index.php/Home/Order",
        'data'=>array(
            //字段一定要与模板内容相对应
            //{{first.DATA}} 订单状态：{{keyword1.DATA}} 油品类型：{{keyword2.DATA}} 车牌号：{{keyword3.DATA}} 公司名称：{{keyword4.DATA}} 联系电话：{{keyword5.DATA}} {{remark.DATA}}
            'first'=>array('value'=>'您好！您的订单状态已更改','color'=>"#FF0000"),
            'keyword1'=>array('value'=>$order_status,'color'=>'#000000'),
            'keyword2'=>array('value'=>$oil_type,'color'=>'#000000'),
            'keyword3'=>array('value'=>$plate,'color'=>'#000000'),
            'keyword4'=>array('value'=>$company,'color'=>'#000000'),
            'keyword5'=>array('value'=>$phone,'color'=>'#000000'),
            'remark'=>array('value'=>'点击可查看详细信息','color'=>'#FF0000'), )
    );
    $template=json_encode($template);
    //将上面的数组数据转为json格式 json_encode—对变量进行 JSON 编码
    //$json_template=json_encode($template);
//echo $json_template;
//echo $this->access_token;
    $url="https://api.weixin.qq.com/cgi-bin/message/template/send?access_token=".$access_token;
    $res=getJsons($url,$template);
    return $res;
}
function getJsons($url,$data=null){
    /*  使用 cURL 函数的基本思想是先使用 curl_init() 初始化 cURL会话，
        接着可以通过 curl_setopt() 设置需要的全部选项，
        然后使用 curl_exec() 来执行会话，
        当执行完会话后使用 curl_close() 关闭会话*/
    $ch = curl_init();
//  CURLOPT_URL 需要获取的 URL 地址，也可以在curl_init() 初始化会话的时候。value应该被设置成 string。
    curl_setopt($ch, CURLOPT_URL, $url);
//  CURLOPT_RETURNTRANSFER 返回原生的（Raw）内容。TRUE 将curl_exec()获取的信息以字符串返回，而不是直接输出。
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//  CURLOPT_SSL_VERIFYPEER  FALSE 禁止 cURL 验证对等证书（peer's certificate）。
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
//  CURLOPT_SSL_VERIFYHOST  value应该被设置成 integer  0 为不检查名称
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    if (!empty($data)) {
        // POST数据
        //  CURLOPT_POST  value应该被设置成 bool类型，TRUE时会发送 POST请求，类型为：application/x-www-form-urlencoded，是 HTML 表单提交时最常见的一种。
        curl_setopt($ch, CURLOPT_POST, 1);
        // 把post的变量加上
        //  CURLOPT_POSTFIELDS  全部数据使用HTTP协议中的 "POST" 操作来发送。 value 必须是个数组
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }
    /*  执行给定的 cURL 会话。ch由 curl_init() 返回的 cURL 句柄。
        成功时返回 TRUE， 或者在失败时返回 FALSE。
        然而，如果设置了CURLOPT_RETURNTRANSFER 选项函数执行成功时会返回执行的结果，失败时返回 FALSE*/
    $output = curl_exec($ch);
//  关闭 cURL 会话并且释放所有资源。cURL 句柄 ch 也会被删除。
    curl_close($ch);
//  json_decode — 对 JSON 格式的字符串进行解码  assoc当该参数为TRUE时，将返回array而非object 。
    return json_decode($output, true);
}