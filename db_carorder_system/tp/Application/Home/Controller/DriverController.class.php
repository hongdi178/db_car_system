<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/20
 * Time: 21:31
 */

namespace Home\Controller;
use Think\Controller;

class DriverController extends Controller{
    public function index(){
        $name=session('User.name');
        $this->assign('name',$name);
        $this->display();
    }
    public function orderpool(){
        $User = M('Order');
        $list = $User->order('create_time DESC')->select();
        $this->assign('list',$list);
        $this->display();
    }
    public function personcenter(){
        $this->display();
    }
    public function personorder(){
        $User = M('Order');
        $conditon['user_id']=session('User.id');
        $list = $User->where($conditon)->select();
        $this->assign('list',$list);
        $this->display();
    }
    public function recive(){
        $Driver = M('Order');
        $id=$_GET['id'];
        $this->assign('id',$id);
        $list = $Driver->find($id);
        $this->assign('attr',$list);
        //
        $car =M('car');
        $number=$car->where()->select();

        $this->assign('number',$number);
        if(empty($_POST)){
            $this->show();
        }
        else{
            $_POST['id']=$id;
            $_POST['order_status']=1;
            $_POST['user_id']=session('User.id');
            $_POST[]=
            $n=$Driver->save($_POST);
            if($n){
                $this->success('修改成功','/index.php?c=driver&a=index');
            }
            else{
                $this->error('修改失败');
            }
        }
    }
    public function password(){
        $this->display();
    }
    public function changepassword(){
        $password=$_POST['password'];
        $id=session('User.id');
        $ret = D('User')->changePassword($password,$id);
        if(!$ret){
            return show(0,'修改失败');
        }
        else{
            return show(1,'修改成功');
        }
    }
    public function information(){
        $name=session('User.name');
        $this->assign('name',$name);
        $phone=session('User.phone');
        $this->assign('phone',$phone);
        $this->display();
    }
    public function order(){
        $User = M('Order');
        $conditon['user_id']=session('User.id');
        $list = $User->where($conditon)->select();
        $this->assign('list',$list);
        $this->display();

    }

    public function arrive(){
        if(!$_POST){
            $orderId=$_GET['id'];
            $this->assign('id',$orderId);

            $this->display();
        }
        else{
            $orderId=$_POST['id'];
        $data['order_status']=2;
        $id=D('order')->getGoodsByid($orderId);

        $quantity=$_POST['real_quantity'];

        $res=D('goods')->addRealQuantity($quantity,$id);
        $order=M('order')->where("id='$orderId'")->save($data);

        if(!$res){
            return show(0,'失败');
        }
        else{
            return show(1,'成功');
        }
        }
    }
    public function select(){
        $begin=$_GET['begin'];
        $ending=$_GET['ending'];
        $begin=$begin."-00";
        $ending=$ending."-00";//字符串添加
        $id=session('User.id');
        $list=D('order')->selectMonth($begin,$ending,$id);
        $this->assign('list',$list);
        $this->display('order');

    }
}

