<?php
namespace Home\Model;
use Think\Model;

/**
 * 用户组操作
 * @author  singwa
 */
class AdminModel extends Model {
    private $_db = '';

    public function __construct() {
        $this->_db = M('admin');
    }

    public function getAdminByUsername($username='') {
        $res = $this->_db->where("name='$username'")->find();
        return $res;
    }
    public function getAdminByAdminId($adminId=0) {
        $res = $this->_db->where('admin_id='.$adminId)->find();
        return $res;
    }
    public function changepassword($password){
        $data['password']=$password;
        $res=$this->_db->where("name='hongdi'")->save($data);
        return $res;
    }
   /* public function updateByAdminId($id, $data) {

        if(!$id || !is_numeric($id)) {
            throw_exception("ID不合法");
        }
        if(!$data || !is_array($data)) {
            throw_exception('更新的数据不合法');
        }
        return  $this->_db->where('admin_id='.$id)->save($data); // 根据条件更新记录
    }*/
    public function add($username,$password,$roleId){
        $data['name']=$username;
        $data['password']=$password;
        $data['role_id']=$roleId;
        $data['create_time']=date("Y-m-d H-i-s");
        $res=$this->_db->add($data);
        return $res;
    }
    public function update($name,$password,$id,$roleId){
        $data['name']=$name;
        $data['password']=$password;
        $data['id']=$id;
        $data['role_id']=$roleId;
        $data['update_time']=date("Y-m-d H-i-s");
        $res=$this->_db->where("id='$id'")->save($data);
        return $res;
    }
    public function check($password){
        $correctPassword=$this->_db->where("id=1")->getField('password');
        if($password!=$correctPassword){
            return false;
        }
        else{
            return true;
        }
    }
}
