<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/14
 * Time: 9:11
 */

namespace Home\Controller;
use Think\Controller;

class OilController extends Controller
{
    public function index(){
        $admin=M('oil');
        $list=$admin->where('father_id="0"')->select();
        $this->assign('list',$list);
        $this->display();
    }
    public function update(){
        $m = M("oil");
        $data['id']=$_GET['id'];
        //var_dump($data['id']);
        $attr = $m->where($data)->select();
        //var_dump($attr);
        $this->assign("attr",$attr);
        $this->display();

    }
    public function updateAction(){
        $m = M("oil");
        $data['id']=$_POST['id'];
        $condition['name']=$_POST['name'];
        $n=$m->where($data)->save($condition);
        if($n){
            $index = A('operate');//a方法 调用了operate控制器
            $name=$_POST['name'];
            $index->addLog("更新了：$name 油", session('adminUser.name'));
            //$this->success('修改成功','/hongdi/db_carorder_system/tp/index.php/Home/Oil/index');
            return show(1,'修改成功');
        }
        else{
            /*$this->error('修改失败');*/
            var_dump($_POST);
        }
    }
    public function delete(){
        $User = M('Oil');
        $data['id']=$_POST['id'];
        $res=$User->where($data)->delete();
        if($res){
            $index = A('operate');//a方法 调用了operate控制器
            $name=$_POST['name'];
            $index->addLog("删除了油品类型id为:".$_POST['id'], session('adminUser.name'));
            return show(1,'删除成功');
        }
        else{
            return show(0,'删除失败');
        }
    }
    public function find(){
        $oil=M('oil');
        $condition['father_id']=$_GET['id'];
        $this->assign('id',$condition['father_id']);
        $result=$oil->where($condition)->select();
        $this->assign('list',$result);
        $this->display();
    }
    public function add(){
        if(empty($_POST)){
            $this->show();
        }
        else{
            $m=M('Oil');
            $_POST['create_time']=date("Y-m-d H:i:s");
            $_POST['father_id']=0;
            $n=$m->add($_POST);
            if($n){
                $index = A('operate');//a方法 调用了operate控制器
                $name=$_POST['name'];
                $index->addLog("增加了：$name 类型的油", session('adminUser.name'));
                return show(1,'增加成功');
            }
            else{
                return show(1,'增加成功');
            }
        }
    }
    public function updateOil(){
        $m = M("oil");
        $code = $_GET["id"];
        $attr = $m->find($code);
        $this->assign("attr",$attr);
        $this->display();

    }
    public function updateOilAction(){
        $m = M("oil");
        $data['name']=$_POST['name'];
        $condition['id']=$_POST['id'];
        $n=$m->where($condition)->save($data);
        if($n){
            $index = A('operate');//a方法 调用了operate控制器
            $name=$_POST['name'];
            $index->addLog("更新了：$name 油", session('adminUser.name'));
            //$this->success('修改成功','/hongdi/db_carorder_system/tp/index.php/Home/Oil/index');
            return show(1,'修改成');
        }
        else{
            /*$this->error('修改失败');*/
            var_dump($_POST);
        }
    }
    public function addOil(){
        $id=$_GET['id'];
        if(empty($_POST)){
            $this->assign("id",$id);
            $this->display();
        }
        else{
            $m=M('Oil');
            $data['name']=$_POST['name'];
            $data['create_time']=date("Y-m-d H:i:s");
            $data['father_id']=$_POST['id'];
            $n=$m->add($data);
            if($n){
                $index = A('operate');//a方法 调用了operate控制器
                $name=$_POST['name'];
                $index->addLog("增加了：$name 油", session('adminUser.name'));
                $this->success('修改成功','/hongdi/db_carorder_system/tp/index.php/Home/Oil/index');
            }
            else{
                $this->error('修改失败');
            }
        }

    }
    public function deleteoil($id)
    {
        $oil = M('Oil');
        if($oil->delete($id)){
            $url ='/hongdi/db_carorder_system/tp/index.php/Home/Oil/index';
            $this->success("删除成功！",$url);
        }
        else{
            $this->error("删除失败！");
        }
    }
}