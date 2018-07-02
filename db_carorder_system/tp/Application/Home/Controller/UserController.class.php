<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/16
 * Time: 19:19
 */
namespace Home\Controller;
use Think\Controller;
use Think\Model;

class UserController extends Controller{

    public function index(){
        $User = M('User');
        $list = $User->select();
        $this->assign('list',$list);
        $this->display();
    }
    public function update(){
        $m = M("user");
        $code = $_GET["id"];
        $attr = $m->find($code);
        $this->assign("attr",$attr);
        if(empty($_POST)){
            $this->show();
        }
        else{
            //$_POST['id']=$code;
            $_POST['update_time']=date("Y-m-d H:i:s");
            $n=$m->save($_POST);
            $index = A('operate');//a方法 调用了operate控制器
            $name=$_POST['name'];
            $index->addLog("修改了：$name 的信息", session('adminUser.name'));
            if($n){

                return show(1,'修改司机信息成功');
            }
            else{

                return show(0,'修改错误');
            }
        }
    }
    public function delete($id){
        $User = M('User');
        if($User->delete($id)){
            $url ='/index.php?c=user&a=index';
            $this->success("删除成功！",$url);
        }
        else{
            $this->error("删除失败！");
        }
    }
    public function add(){

        if(empty($_POST)){
            $this->show();
        }
        else{

            $m=M('User');
            $_POST['create_time']=date("Y-m-d H:i:s");
            $n=$m->add($_POST);

            if($n){
                $this->success('修改成功','/index.php?c=user&a=index');
            }
            else{
                $this->error('修改失败');
            }
        }
    }
}

