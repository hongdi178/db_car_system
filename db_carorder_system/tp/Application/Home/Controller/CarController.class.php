<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/20
 * Time: 16:50
 */
namespace Home\Controller;
use Think\Controller;
class CarController extends Controller{
    public function index(){
        $Car = M('Car');
        $list = $Car->select();
        $this->assign('list',$list);
        $this->display();
    }
    public function update(){
        $m = M("Car");
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
                $this->success('修改成功','/index.php?c=car&a=index');
            }
            else{
                /*$this->error('修改失败');*/
                var_dump($_POST);
            }
        }
    }
    public function add(){

        if(empty($_POST)){
            $this->show();
        }
        else{
            $m=M('Car');
            $_POST['create_time']=date("Y-m-d H:i:s");
            $n=$m->add($_POST);
            if($n){
                $this->success('修改成功','/index.php?c=car&a=index');
            }
            else{
                $this->error('修改失败');
            }
        }
    }
    public function delete($id){
        $User = M('Car');
        if($User->delete($id)){
            $url ='/index.php?c=car&a=index';
            $this->success("删除成功！",$url);
        }
        else{
            $this->error("删除失败！");
        }
    }
}
