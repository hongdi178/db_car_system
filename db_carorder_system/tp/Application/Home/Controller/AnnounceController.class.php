<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/26
 * Time: 17:28
 */

namespace Home\Controller;
use Think\Controller;

class AnnounceController extends Controller
{
    public function index(){
        $list=M('role'); //查询数据 然后渲染
        $result=$list->select();
        $this->assign('list',$result);



        $this->display();
    }
    public function update(){
        $message=$_POST['message'];
        $notice=M('notice');
        $data['message']=$message;
        $condition['id']=1;
        $result=$notice->where($condition)->save($data);
        if(!$result){
            return  show(0,'失败');
        }
        else{
            $index = A('operate');//a方法 调用了operate控制器
            $name=$_POST['message'];
            $index->addLog("更新了公告:$name", session('adminUser.name'));
            return show(1,'成功');
        }
    }
}