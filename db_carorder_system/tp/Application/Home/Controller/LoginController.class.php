<?php
namespace Home\Controller;
use Think\Controller;
/**
 * use Common\Model 这块可以不需要使用，框架默认会加载里面的内容
 */
class LoginController extends Controller {

    /*public function index(){
        if(session('adminUser')) {
            $this->redirect('/admin.php?c=index');
        }
        // admin.php?c=index
        $this->display();
    }*/

    public function check() {
        $username = $_POST['username'];
        $password = $_POST['password'];
            $ret = D('admin')->getAdminByUsername($username);
            if(!$ret ) {
                return show(0,'该用户不存在1');
            }

            else if($ret['password'] != $password) {
                return show(0,'密码错误');
            }

            /*D("Admin")->updateByAdminId($ret['admin_id'],array('lastlogintime'=>time()));*/
            else{
                session('adminUser', $ret);
                return show(1,'登录成功');
            }
    }

    public function loginout() {
        session('adminUser', null);
        $this->redirect('Index/index');
    }

}