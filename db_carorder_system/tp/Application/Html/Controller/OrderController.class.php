<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/12
 * Time: 9:26
 */

namespace Html\Controller;
use Think\Controller;

class OrderController extends Controller
{
    public function index(){
        $oil=M('oil');
        $name=$oil->where('father_id="0"')->select();
        $this->assign("oil",$name);
        $province=array("黑","吉","辽");
        $this->assign("province","$province");
        //显示默认的信息
        $user=M('user');
        $data['openid']=$_SESSION['openid'];
        $result=$user->where($data)->select();
        $this->assign("list",$result);
        //显示油品类型
        $list=M('list');
        $result=$list->where($data)->getField('oilName');
        //var_dump($result);
        $this->assign("oilName",$result);

        //油品父类
        $oil=M('oil');
        $oilFather=$oil->where("name='$result'")->getField('father_id');
    
        $oilFatherName=$oil->where("id='$oilFather'")->getField('name');
        //var_dump($oilFatherName);
        $this->assign('oilFatherName',$oilFatherName);
        //车牌号
        $list=M('list');
        $plateNumber=$list->where($data)->getField('plate_number');
        $first=mb_substr($plateNumber, 0, 1, 'utf-8');
        $second=mb_substr($plateNumber, 1, 1, 'utf-8');
        $number=mb_substr($plateNumber, 2,7);
        //var_dump($plateNumber);
        //var_dump($first);
        //var_dump($second);
        //var_dump($number);
        $this->assign('first',$first);
        $this->assign('second',$second);
        $this->assign('number',$number);
        $this->display();
    }

    public function oil(){
        $result = array();
        $cate =$_POST['type'];
        $result = M('oil')->where(array('father_id'=> $cate))->field('id,name')->select();
        $this->ajaxReturn($result,"JSON");
    }
    public function addOrder(){
        //首先查询是否可以添加订单
        //查询用户ID
        $user=M('user');
        $data['openid']=$_SESSION['openid'];
        $id=$user->where($data)->getField('id');
        $order=M('order');
        $data['rank']=array('neq',0);
        $data['user_id']=$id;
        $number=$order->where($data)->count('rank');
        //var_dump($number);die;
        if($number==1){
            return show(0,'您已经有预约的车辆！');
        }
        $order=M('order');
        $rank=D('order');
        $_POST['openid']=$_SESSION['openid'];
        $_POST['create_time']=date("Y-m-d H:i:s");
        $_POST['stop']=0;
        //查出用户id
        $user=M('user');
        $data['openid']=$_SESSION['openid'];
        $id=$user->where($data)->getField('id');
        $_POST['user_id']=$id;
        //查出油品id
        $oil=M('oil');
        $data['name']=$_POST['oil'];
        $oil_id=$oil->where($data)->getField('id');
        $_POST['oil_id']=$oil_id;
        //车牌号的前两位
        //$arr=array($_POST['first'],$_POST['second'],$_POST['plateNumber']);
        $plate=$_POST['first'].$_POST['second'].$_POST['car_plate_number'];
        $_POST['plate_number']=$plate;
        $_POST['order_number']=date('Ymd').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
        $_POST['rank']=$rank->rank();
        $result=$order->add($_POST);
        //插入到个人信息表内
        $User=M('user');
        $id=$_SESSION['openid'];
        $message['name']=$_POST['name'];
        $message['phone']=$_POST['phone'];
        $message['company']=$_POST['company'];
        $plateNumber=$_POST['first'].$_POST['second'].$_POST['car_plate_number'];
        $message['plate_number']=$plateNumber;
        $res=$User->where("openid='$id'")->save($message);
        if($result){
            return show(1,'增加成功');
        }
        else{
            return show(0,'增加失败');
        }
    }
}

