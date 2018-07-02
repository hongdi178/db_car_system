<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/17
 * Time: 19:03
 */

namespace Home\Controller;
use Think\Controller;

class ListController extends Controller
{
    public function index(){
        $list=M('order');
        $result=$list->join('t_user on t_order.user_id=t_user.id')->order('rank')->select();
        $this->assign("list",$result);
        $order=D('order');
        $status=$order->status();
        $this->assign("status",$status);
        $this->display();
    }
    public function delete(){
        $rank=$_POST['rank'];
        $list=D('order');
        $result=$list->deleteRank($rank);

        if(!$result)
        {
            return show(0,'失败');
        }
        else{

            $index = A('operate');//a方法 调用了operate控制器
            $name=$_POST['name'];
            $index->addLog("删除了排第：$rank 队列", session('adminUser.name'));
            return show(1,'成功');
        }

    }
    public function update(){
        $rank=$_GET['rank'];
        $this->assign('rank',$rank);
        $this->display();

    }
    public function updateRank(){
        $rank=$_POST['rank'];
        $updateRank=$_POST['updateRank'];
        if($updateRank==1){
            return show(0,'不能修改排位为1');
        }
        $order=D('order');
        $result=$order->updateRank($rank,$updateRank);
        if(!$result){
            return show(0,'失败');
        }
        else{
            $index = A('operate');//a方法 调用了operate控制器
            $name=$_POST['name'];
            $index->addLog("修改了了排第：$rank 队列", session('adminUser.name'));
            return show(1,'成功');
        }
    }
    public function pause(){

        $order=D('order');
        $result=$order->pause();
        $result=$order->stop();
        $openid='o5UzE0wSTH8eTapMxyh7PxPjs08Y';
        $order_status='3';
        $oil_type='乙烯';
        $plate='5454';
        $company='一将';
        $phone='13075206490';
        $message=sendTemplate($openid,$order_status,$oil_type,$plate,$company,$phone);

        if(!$result){
            return show(0,'失败');
        }
        else{
            $index = A('operate');//a方法 调用了operate控制器
            $name=$_POST['name'];
            $index->addLog("暂停了 队列", session('adminUser.name'));
            return show(1,'成功');
        }
    }

    public function cancel(){
        $order=D('order');
        $result=$order->cancel();
        $result=$order->back();
        if(!$result){
            return show(0,'失败');
        }
        else{
            $index = A('operate');//a方法 调用了operate控制器
            $name=$_POST['name'];
            $index->addLog("取消暂停了 队列", session('adminUser.name'));
            return show(1,'成功');
        }

    }
    public function add(){
        $user=D('user');
        $result=$user->getUser();
        $this->assign('list',$result);
        $this->display();
    }
    public function complete(){
        $order=D('Order');
        $result=$order->complete();
        if(!$result){
            return show(0,'失败');
        }
        else{
            $index = A('operate');//a方法 调用了operate控制器
            $name=$_POST['name'];
            $index->addLog("完成了： 队列", session('adminUser.name'));
            return show(1,'成功');
        }
    }
    public function select(){
        $id=$_GET['status'];//id=0不用管 id=1为已装 id=2为装车中 id=3为厂区待装 id=4为厂外待装
        $this->assign("status",$id);
        $Order = M('list');

        switch($id)
        {
            case 1:
                $list = $Order->where(array('rank'=>0))->select();
                $this->assign('list',$list);
                break;
            case 2:
                $list = $Order->where("rank='1'")->select();
                $this->assign('list',$list);
                break;
            case 3:
                $list = $Order->where("rank='2'")->select();
                $this->assign('list',$list);
                break;
            case 4:
                $list = $Order->where("rank>='3'")->select();
                $this->assign('list',$list);
                break;
            case 5:
                $list =$Order->select();
                $this->assign('list',$list);
        }
        $order=D('order');
        $status=$order->status();
        $this->assign("status",$status);
        $this->display('index');

    }
    public function phpExcelList($field, $list, $title='文件')
    {
        vendor('phpExcel.PHPExcel');
        $objPHPExcel = new \PHPExcel();
        $objWriter = new \PHPExcel_Writer_Excel5($objPHPExcel); //设置保存版本格式
        foreach ($list as $key => $value) {
            foreach ($field as $k => $v) {
                if ($key == 0) {
                    $objPHPExcel->getActiveSheet()->setCellValue($k . '1', $v[1]);
                }
                $i = $key + 2; //表格是从2开始的
                $objPHPExcel->getActiveSheet()->setCellValue($k . $i, $value[$v[0]]);
            }

        }
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control:must-revalidate, post-check=0, pre-check=0");
        header("Content-Type:application/force-download");
        header("Content-Type:application/vnd.ms-execl");
        header("Content-Type:application/octet-stream");
        header("Content-Type:application/download");;
        header('Content-Disposition:attachment;filename='.$title.'.xls');
        header("Content-Transfer-Encoding:binary");
//        $objWriter->save($title.'.xls');
        $objWriter->save('php://output');
    }
    public function output() {
        $Order = M('Order');
        $list = $Order->select();
        $data=$list;
        $field = array(
            'A' => array('id', 'ID'),
            'B' => array('order_number', '订单编号'),
            'C' => array('caro_plate_number', '车牌号'),
            'D' => array('create_time', '创建时间'),
            'E' => array('update_time', '更新时间'),
            'F' => array('delete_time', '删除时间'),
            'G' => array('name', '姓名'),
            'H' => array('phone', '电话号码'),
            'I' => array('rank', '排序'),
            'J' => array('company', '公司'),

        );
        $this->phpExcelList($field, $data, '订单列表_' . date('Y-m-d'));
    }
    public function timeOut(){
        $beginTime=$_GET['begintime'];
        $finalTime=$_GET['finaltime'];
        $data=D('order')->selectTime($beginTime,$finalTime);//查询时间段

        $field = array(
            'A' => array('id', 'ID'),
            'B' => array('order_number', '订单编号'),
            'C' => array('caro_plate_number', '车牌号'),
            'D' => array('create_time', '创建时间'),
            'E' => array('update_time', '更新时间'),
            'F' => array('delete_time', '删除时间'),
            'G' => array('name', '姓名'),
            'H' => array('phone', '电话号码'),
            'I' => array('rank', '排序'),
            'J' => array('company', '公司'),


        );
        $index = A('operate');//a方法 调用了operate控制器
        $name=$_POST['name'];
        $index->addLog("生成了excel", session('adminUser.name'));
        $this->phpExcelList($field, $data, '订单列表_' . date('Y-m-d'));
    }
}

