<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/20
 * Time: 19:08
 */
namespace Home\Controller;
use Think\Controller;
class OrderController extends Controller{
    public function index(){
        $Order = M('Order');
        $list = $Order->order('create_time DESC ')->select();
        $this->assign('list',$list);
        $this->display();
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
                $this->success('修改成功','/index.php?c=order&a=index');
            }
            else{
                $this->error('修改失败');
            }
        }
    }
    public function add(){
            $m=M('Order');

            $_POST['create_time']=date("Y-m-d H:i:s");

            $goodsdata['name']=$_POST['goods_name'];
            $goodsdata['quantity']=$_POST['delivery_quantity'];
            $goodsdata['number']=date('Ymd') . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);
            $goods=M('Goods');
            $g=$goods->add($goodsdata);
            $goods_number=$goodsdata['number'];
            $id=$goods->where("number='$goods_number'")->getField("id");//先生成商品表，再生成订单表

            $data['number']=date('Ymd').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
            $data['order_number']=$_POST['order_number']  ;
            $data['destination']=$_POST['destination']  ;
            $data['goods_name']=$_POST['goods_name']  ;
            $data['delivery_quantity']=$_POST['delivery_quantity'] ;
            $data['departure_time']= $_POST['departure_time']  ;
            $data['create_time']=$_POST['create_time']  ;
            $data['order_status']=0;
            $data['goods_id']=$id;
            $n=$m->add($data);
            if($n&&$g){
                $this->success('修改成功','/index.php?c=order&a=index');
            }
            else{
                $this->error('修改失败');
            }
    }
    public function delete($id){
        $User = M('Order');
        if($User->delete($id)){
            $url ='/index.php?c=order&a=index';
            $this->success("删除成功！",$url);
        }
        else{
            $this->error("删除失败！");
        }
    }
    public function create(){
        $this->display('add');
    }
    public function select(){
        $id=$_GET['status'];
        $this->assign("status",$id);
        $Order = M('Order');
        $list = $Order->where("order_status='$id'")->select();
        $this->assign('list',$list);
        $this->display();

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
            'B' => array('number', '订单编号'),
            'C' => array('order_number', '订单号'),
            'D' => array('create_time', '创建时间'),
            'E' => array('departure_time', '出发时间'),
            'F' => array('car_id', '出车车牌号'),
            'G' => array('destination', '目的地'),
            'H' => array('order_status', '订单状态'),
            'I' => array('user_id', '接单司机编号'),
            'J' => array('pick_number', '提货单号'),
            'K' => array('contract_number', '合同号'),
            'L' => array('short_supply_info','缺货信息'),
            'M' => array('delivery_quantity', '提货数量'),
            'N' => array('delivery_time', '提货时间'),
            'O' => array('settle_company', '结算单位'),
            'P' => array('goods_name', '商品名称'),

        );
        $this->phpExcelList($field, $data, '充值列表_' . date('Y-m-d'));
    }
    public function timeOut(){
        $beginTime=$_GET['begintime'];
        $finalTime=$_GET['finaltime'];
        $data=D('order')->selectTime($beginTime,$finalTime);//查询时间段

        $field = array(
            'A' => array('id', 'ID'),
            'B' => array('number', '订单编号'),
            'C' => array('order_number', '订单号'),
            'D' => array('create_time', '创建时间'),
            'E' => array('departure_time', '出发时间'),
            'F' => array('car_id', '出车车牌号'),
            'G' => array('destination', '目的地'),
            'H' => array('order_status', '订单状态'),
            'I' => array('user_id', '接单司机编号'),
            'J' => array('pick_number', '提货单号'),
            'K' => array('contract_number', '合同号'),
            'L' => array('short_supply_info','缺货信息'),
            'M' => array('delivery_quantity', '提货数量'),
            'N' => array('delivery_time', '提货时间'),
            'O' => array('settle_company', '结算单位'),
            'P' => array('goods_name', '商品名称'),

        );
        $this->phpExcelList($field, $data, '充值列表_' . date('Y-m-d'));
    }
}
