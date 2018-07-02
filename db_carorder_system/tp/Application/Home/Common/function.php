<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/12
 * Time: 21:47
 */
function  show($status, $message,$data=array()) {
    $reuslt = array(
        'status' => $status,
        'message' => $message,
        'data' => $data,
    );

    exit(json_encode($reuslt));
}
function getMd5Password($password) {
    return md5($password . C('MD5_PRE'));
}
//公共的配置
$appid = "wxb36891e3cb914461";
$secret = "89eba119e623b13a7dddaea2bea70596";
$code = $_GET["code"];
//var_dump($code);die;
//第一步:取全局access_token
$url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appid&secret=$secret";
$token = getJson($url);
//var_dump($token);die;
//第二步:取得openid
$oauth2Url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=$appid&secret=$secret&code=$code&grant_type=authorization_code";
$oauth2 = getJson($oauth2Url);

//第三步:根据全局access_token和openid查询用户信息
$access_token = $token["access_token"];
$openid = $oauth2['openid'];
$get_user_info_url = "https://api.weixin.qq.com/cgi-bin/user/info?access_token=$access_token&openid=$openid&lang=zh_CN";
$userinfo = getJson($get_user_info_url);

//打印用户信息


