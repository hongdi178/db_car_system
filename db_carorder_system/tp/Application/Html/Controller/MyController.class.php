<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/12
 * Time: 9:27
 */

namespace Html\Controller;
use Think\Controller;

class MyController extends Controller
{
    public function index(){
        $openid=$_SESSION['openid'];
        $user=M('user');
        $data['openid']=$openid;
        $result=$user->where($data)->select();
        $this->assign('list',$result);
        $this->display();
    }
    public function order(){
        $openid=$_SESSION['openid'];
        $user=M('list');
        $data['openid']=$openid;
        $result=$user->where($data)->select();
        $this->assign('list',$result);
        $this->display();
    }
    public function page(){
        $openid=$_SESSION['openid'];
        $user=M('list');
        $data['openid']=$openid;
        $data['rank']=array('neq',0);
        $result=$user->where($data)->select();
        if(!$result){
            $minTime=$user->max('create_time');//最新的时间
            $data['rank']=array('eq',0);
            $data['create_time']=$minTime;
            $result=$user->where($data)->select();
        }
        $this->assign('list',$result);

        $this->display();
    }
    public function contactUs(){
        $this->display();
    }
    public function aboutUs(){
        $this->display();
    }
    public function change(){
        $openid=$_SESSION['openid'];
        $user=M('user');
        $data['openid']=$openid;
        $result=$user->where($data)->save($_POST);
        $this->assign('list',$result);
        if($result){
            return show(1,'成功');
        }
        else{
            return show(0,'失败');
        }
        //redirect('Order/index');
    }
}