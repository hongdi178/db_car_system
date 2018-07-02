<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/28
 * Time: 9:14
 */

namespace Html\Controller;
use Think\Controller;

class ListController extends Controller
{
    public function index(){
        $oil=M('oil');
        $name=$oil->where('father_id="0"')->select();
        $this->assign("oil",$name);
        $announce=M('notice');
        $data['id']=1;
        $result=$announce->where($data)->select();
        $this->assign("announce",$result);
        $this->display();
    }
    public function selectOrder(){
        $text =$_GET['text'];

        $order=M('list');
        $data['plate_number']=array('like',"%$text%");
        $result=$order->where($data)->order('rank asc')->select();
        $this->assign("list",$result);
        $oil=M('oil');
        $name=$oil->where('father_id="0"')->select();
        $this->assign("oil",$name);
        $announce=M('notice');
        $data['id']=1;
        $result=$announce->where($data)->select();
        $this->assign("announce",$result);
        $this->display('List/index');
    }
    public function selectOil(){//根据油品id来查询
        $oil = $_GET['oil'];

        $table=M('oil');
        $data['name']=$oil;
        $id=$table->where($data)->getField('id');

        $table=M('list');
        $result=$table->where("oil_id='$id'")->order('rank asc')->select();

        $this->assign('list',$result);

        $oil=M('oil');
        $name=$oil->where('father_id="0"')->select();
        $this->assign("oil",$name);
        $announce=M('notice');
        $data['id']=1;
        $result=$announce->where($data)->select();
        $this->assign("announce",$result);

        $this->display('List/index');
    }
}





















