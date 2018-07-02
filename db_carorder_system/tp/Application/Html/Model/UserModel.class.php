<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/27
 * Time: 19:33
 */

namespace Html\Model;
use Think\Model;

class UserModel extends  Model
{

    private $_db = '';

    public function __construct() {
        $this->_db = M('user');
    }
    public function getAllOpenid(){

    }
    public function addUser($openid,$nickname,$headimgurl){
        $data=array(
            'openid'=>$openid,
            'nickname'=>$nickname,
            'head_img'=>$headimgurl
        );

        $res=$this->_db->add($data);
        return $res;
    }
    public function whetherExit($id){
        $res=$this->_db->where("openid like '%s' ",array($id))->select();
        return $res;
    }
}