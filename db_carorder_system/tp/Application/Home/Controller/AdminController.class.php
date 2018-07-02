<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/16
 * Time: 10:45
 */
namespace Home\Controller;
use Think\Controller;

class AdminController extends Controller{
    public function index(){
        $admin=M('admin');
        $data['id']=session('adminUser.id');
        $result=$admin->where($data)->getField('role_id');//查询用户的角色id
        $role=M('role');
        $condition['id']=$result;//查询用户的角色id的权限
        $res=$role->where($condition)->getField('action');
        $res=explode(';',$res);
        if(in_array("1",$res)){
            $result['0']=1;
        }
        if(in_array("2",$res)){
            $result['1']=2;
        }
        if(in_array("3",$res)){
            $result['2']=3;
        }
        if(in_array("4",$res)){
            $result['3']=4;
        }
        if(in_array("5",$res)){
            $result['4']=5;
        }
        if(in_array("6",$res)){
            $result['5']=6;
        }
        if(in_array("7",$res)){
            $result['6']=7;
        }
        if(in_array("8",$res)){
            $result['7']=8;
        }
        //var_dump($res);
        $this->assign('power',$result);
        $this->display();
    }
    public function manage(){
        $admin=M('role_name');
        $list=$admin->select();
        $this->assign('list',$list);
        $this->display();
    }
    public function add(){
        if(empty($_POST)){
            $role=M('role');
            $data['status']=1;
            $result=$role->where($data)->select();
            $this->assign('list',$result);
            $this->display();
        }
        else{
            $username=$_POST['username'];
            $password=$_POST['password'];
            $id=$_POST['id'];
            $admin=D('admin');
            $result=$admin->add($username,$password,$id);
            if(!$result){
                return show(0,'失败');
            }
            else{
                $index = A('operate');//a方法 调用了operate控制器
                $username=$_POST['username'];
                $index->addLog("增加了：$username 的管理员", session('adminUser.name'));
                return show(1,'成功');
            }
        }
    }
    public function delete(){
        $admin=M('admin');
        $data['id']=$_POST['id'];
        $result=$admin->where($data)->delete();
        if(!$result){
            return show(0,'失败');
        }
        else{
            $index = A('operate');//a方法 调用了operate控制器
            $username=$_POST['username'];
            $index->addLog("删除了id：$id 管理员", session('adminUser.name'));
            return show(1,'成功');
        }
    }

    public function update(){
            $admin=M('role_name');
            $id=$_GET['id'];
            $result=$admin->where("id='$id'")->select();
            $this->assign('list',$result);
           // var_dump($result);die;
            $role=M('role');
            $result=$role->where("status='1'")->select();
            $this->assign('role',$result);
            $this->display();
    }
    public function updateAction(){
        $name=$_POST['name'];
        $password=$_POST['password'];
        $id=$_POST['id'];
        $roleId=$_POST['roleId'];
        $admin=D('admin');
        $result=$admin->update($name,$password,$id,$roleId);
        if(!$result){
            return show(0,'失败');
        }
        else{
            $index = A('operate');//a方法 调用了operate控制器
            $name=$_POST['name'];
            $index->addLog("更新了：$name 管理员", session('adminUser.name'));
            return show(1,'成功');
        }
    }
}

