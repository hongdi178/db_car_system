<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/26
 * Time: 14:41
 */

namespace Home\Controller;
use Think\Controller;

class PowerController extends Controller
{
    public function index(){
    	$role=M('role');
    	$result=$role->where("status='1'")->select();
    	$this->assign('list',$result);
    	//echo "<pre>";
    	//var_dump($result);
        //echo "<pre>";
        $length= count($result);
        for($i=0;$i<=$length-1;$i++){
            $number=explode(',',$result[$i]['action']);
        }

        $this->display();

    }
    public function add(){
        if(empty($_POST)){
            $this->show();
        }
        else{
            $role=M('role');
            $data['name']=$_POST['name'];
            $data['user']=$_POST['user'];
            $data['password']=$_POST['password'];
            $data['admin']=$_POST['admin'];
            $data['operate']=$_POST['operate'];
            $data['oil']=$_POST['oil'];
            $data['list']=$_POST['list'];
            $data['power']=$_POST['power'];
            $data['announce']=$_POST['announce'];
            $data['status']=1;
            $data['create_time']=date("Y-m-d H-i-s");
            $data['action']=$_POST['action'];
            $result=$role->add($data);
            if(!$result){
                return show(0,'失败');
            }
            else{
                $index = A('operate');//a方法 调用了operate控制器
                $name=$_POST['name'];
                $index->addLog("增加了角色：$name", session('adminUser.name'));
                return show(1,'成功');
            }
        }

    }
    public function delete(){//删除角色
        $role=M('role');
        $data['id']=$_POST['id'];

        $condition['status']=0;
        $condition['delete_time']=date('Y-m-d H-i-s');
        $result=$role->where($data)->save($condition);
        if(!$result){
            return show(0,'失败');
        }else{
            $index = A('operate');//a方法 调用了operate控制器
            $message=$_POST['id'];
            $index->addLog("删除了角色，id为：$message", session('adminUser.name'));
            return show(1,'成功');

        }
    }
    public function update(){//进入更新页面
        $role=M('role');
        $data['id']=$_GET['id'];
        $result=$role->where($data)->select();
        $this->assign('list',$result);
        $this->display();
    }
    public function updateAction(){//更新角色
        $role=M('role');

        $condition['id']=$_POST['id'];
        $data['update_time']=date('Y-m-d H-i-s');
        $data['action']=$_POST['action'];
        $result=$role->where($condition)->save($data);
        if(!$result){
            return show(0,'失败');
        }else{
            $index = A('operate');//a方法 调用了operate控制器
            $name=$_POST['id'];
            $index->addLog("更新了id:$name 角色 ", session('adminUser.name'));
            return show(1,'成功');
        }
    }
}