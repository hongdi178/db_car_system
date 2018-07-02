<?php
namespace Html\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index()
    {
        //$this->checkSignature();
        $this->getCode();
    }
    public function getCode()
    {
        $appID = 'wxb36891e3cb914461';
        //用户同意授权后回调的网址.必须使用url对回调网址进行编码，我们也将授权完跳转对网址,
        $redirect_uri = urlencode('http://yijiangbangtest.wsandos.com/hongdi/db_carorder_system/tp/html/Index/getUserInfo');
        $url = 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=' . $appID . '&redirect_uri=' . $redirect_uri . '&response_type=code&scope=snsapi_userinfo&state=1#wechat_redirect';
        header("Location:" . $url);
    }
    public function getUserInfo()
    {
        $appID = 'wxb36891e3cb914461';
        $appsecret = '89eba119e623b13a7dddaea2bea70596';
        $code = $_GET["code"];
        //第一步:取access_token
        $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appID&secret=$appsecret";
        $token =getJson($url);
        //var_dump($token);die;
        //第二步:通过code换取网页授权access_token
        $oauth2Url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=$appID&secret=$appsecret&code=$code&grant_type=authorization_code";
        $oauth2 =getJson($oauth2Url);
        //第三步:根据网页授权access_token和openid查询用户信息
        $access_token = $oauth2["access_token"];
        $openid = $oauth2['openid'];
        $get_user_info_url = "https://api.weixin.qq.com/sns/userinfo?access_token=$access_token&openid=$openid&lang=zh_CN";
        $userinfo =getJson($get_user_info_url);
        session('openid',$userinfo['openid']);
        //查询这个用户是否存在
        $user=D('user');

        $result=$user->whetherExit($userinfo['openid']);
        if(!$result){
            $openid=$userinfo['openid'];
            $nickname=$userinfo['nickname'];
            $headimgurl=$userinfo['headimgurl'];
            $user=D('user');//添加到数据表
            $result=$user->addUser($openid,$nickname,$headimgurl);
            $this->redirect('order/index');
        }
        else{
            $this->redirect('order/index');
        }

    }
    public function checkSignature(){
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
}