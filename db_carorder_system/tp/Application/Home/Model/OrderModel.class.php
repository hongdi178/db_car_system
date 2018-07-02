<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/24
 * Time: 15:18
 */
namespace Home\Model;
use Think\Model;
class OrderModel extends Model{
    private $_db = '';

    public function __construct() {
        $this->_db = M('order');
    }
    public function getGoodsByid($id){
        $res=$this->_db->where("id='$id'")->getField('goods_id');
        return $res;
    }
    public function selectTime($start,$end){
        $res=$this->_db->where("create_time between '%s' and '%s' ",array($start,$end))->select();
        return $res;
    }
    public function selectMonth($start,$end,$id){
        $res=$this->_db->where("departure_time between '%s' and '%s' and user_id='%s'",array($start,$end,$id))->select();
        return $res;
    }
    public function deleteRank($rank){
        $information=array(
            'rank'=>$rank+3
        );
        $rankMax=$this->_db->count();
        if($rank+3 >$rankMax)
        {
            return  false;
        }

        $id=$this->_db->where(array('rank'=>$rank))->getField('id');

        $data=array('rank'=>$rank);
        $res2=$this->_db->where(array('rank'=>$rank+1))->save($data);

        $data2=array('rank'=>$rank+1);
        $res3=$this->_db->where(array('rank'=>$rank+2))->save($data2);

        $data3=array('rank'=>$rank+2);
        $res4=$this->_db->where(array('rank'=>$rank+3))->save($data3);

        $res=$this->_db->where(array('id'=>$id))->save($information);
        if($res&&$res2&&$res3&&$res4)
        {
            return true;
        }
        else {
            return false;
        }
    }
    public function updateRank($rank,$updateRank){
        $max=$this->_db->max('rank');
        if($updateRank>$max){
            return false;
        }
        if($updateRank>$rank)
        {   //先把要修改成的updateRank的订单的排序修改成-1;
            $data['rank']=-1;
            $res=$this->_db->where(array('rank'=>$rank))->save($data);
            for($x=$rank+1;$x<=$updateRank;$x++){
                $data=array('rank'=>$x-1);
                $res2=$this->_db->where(array('rank'=>$x))->save($data);
                if(!$res2){
                    return false;
                }
            }
            $condition=array('rank'=>$updateRank);
            $res1=$this->_db->where(array('rank'=>-1))->save($condition);
            if($res1){
                return true;
            }
            else {
                return false;
            }
        }
        else if($updateRank<$rank){
            //先把要修改成的updateRank的订单的排序修改成-1;
            $data['rank']=-1;
            $res=$this->_db->where(array('rank'=>$updateRank))->save($data);
            for($i=$updateRank+1;$i<=$rank;$i++){
                $data=array('rank'=>$i-1);
                $res2=$this->_db->where(array('rank'=>$i))->save($data);
            }
            $condition=array('rank'=>$rank);
            $res2=$this->_db->where(array('rank'=>-1))->save($condition);
            if($res2){
                return true;
            }
            else{
                return false;
            }
        }
    }
    public function pause(){
        $max=$this->_db->max('rank');
        $min=$this->_db->min('rank');
        for($x=$max;$x>=1;$x--){
            $data=array('rank'=>$x+1);
            $res2=$this->_db->where(array('rank'=>$x))->save($data);
            if(!$res2){
                return false;
            }

        }
        return true;
    }
    public function stop(){
        $max=$this->_db->max('rank');
        $id=$this->_db->min('rank');

        for($x=1;$x<=$max;$x++){
            $data=array('stop'=>1);
            $res2=$this->_db->where(array('rank'=>$x))->save($data);

        }



        return true;
    }
    public function status(){
        //查看是否处于暂停状态
        $res=$this->_db->where(array('rank'=>3))->getField('stop');
        if ($res == 1){
            return true;
        }
        else{
            return false;
        }
    }

    public function cancel(){
        //取消暂停状态
        $max=$this->_db->max('rank');
        $id=$this->_db->min('rank');

        for($x=1;$x<=$max;$x++){
            $data=array('stop'=>0);
            $res2=$this->_db->where(array('rank'=>$x))->save($data);

        }



        return true;

    }

    public function back(){
        //使得所有的排位减1
        $min=$this->_db->min('rank');
        $max=$this->_db->max('rank');
        for($x=1;$x<=$max;$x++){
            $data=array('rank'=>$x-1);
            $res2=$this->_db->where(array('rank'=>$x))->save($data);
            /*if(!$res2){
                return false;
            }*/

        }
        return true;
    }
    public function complete(){
        //使得状态从装车中变成完成 rank从1变成0
        $data=array('rank'=>0);
        $res=$this->_db->where(array('rank'=>1))->save($data);
        //然后再使得剩下的所有排序减1 剩下的所有rank减1
        $min=2;
        $max=$this->_db->max('rank');
        for($x=$min;$x<=$max;$x++){
            $data=array('rank'=>$x-1);
            $res2=$this->_db->where(array('rank'=>$x))->save($data);
            if(!$res2){
                return false;
            }

        }

        return $res;
    }
}
