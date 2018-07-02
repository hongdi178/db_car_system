<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/8
 * Time: 15:56
 */
namespace Home\Controller;
use Think\Controller;
class OperateController extends Controller{
    public function index(){
        $User = M('Log'); // 实例化User对象

        $list = $User->order('create_time DESC')->select();
        $this->assign('list',$list);// 赋值数据集

        $this->display(); // 输出模板

    }

    public function addLog($log, $user)
    {
        $time=date("Y-m-d H:i:s");
        $data = array(
            'user' => $user, //用户ID
            'log' => $log, //操作内容
            'create_time' => $time //操作时间
        );
       $operate=M('log');
       $result=$operate->add($data);
    }
}