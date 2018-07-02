<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/16
 * Time: 10:05
 */
namespace Home\Model;
use Think\Model;

class UserModel extends Model{
    private $_db = '';

    public function __construct() {
        $this->_db = M('user');
    }

    public function getUserByUsername($username='') {
        $res = $this->_db->where("phone='$username'")->find();
        return $res;
    }
    public function getUserByAdminId($adminId=0) {
        $res = $this->_db->where('admin_id='.$adminId)->find();
        return $res;
    }
    public function getUserByPhone($phone){
        $res =$this->_db->where("phone='$phone'")->find();
        return $res;
    }
    public function changePassword($password,$id){
        $data['password']=$password;
        $res=$this->_db->where("id='$id'")->save($data);
        return $res;
    }
    public function getUser(){
        $res =$this->_db->select();
        return $res;
    }
}
