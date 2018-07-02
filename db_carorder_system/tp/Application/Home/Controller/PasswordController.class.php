<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/19
 * Time: 21:09
 */
namespace Home\Controller;
use Think\Controller;

class PasswordController extends Controller{
    public function index(){
        $this->display();
    }
    public function change(){
        $password=$_POST['firstpassword'];
        $checkPassword=$_POST['password'];
        $result = D('admin')->check($checkPassword);
        $ret = D('admin')->changepassword($password);

        if(!$result){
            return show(0,'原来的密码输入错误');
        }
        else if(!$ret){
            return show(0,'修改失败');
        }
        else{
            return show(1,'修改成功');
        }
    }
    public function update(){
        $m = M("Order");
        $code = $_GET["id"];
        $attr = $m->find($code);
        $this->assign("attr",$attr);
        if(empty($_POST)){
            $this->show();
        }
        else{
            $_POST['id']=$code;

            $n=$m->save($_POST);
            if($n){
                $this->success('修改成功','/index.php?c=user&a=index');
            }
            else{
                $this->error('修改失败');
            }
        }
    }
}

