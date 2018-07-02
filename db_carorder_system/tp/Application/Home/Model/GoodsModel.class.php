<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/24
 * Time: 15:07
 */
namespace Home\Model;
use Think\Model;
class GoodsModel extends Model{
    private $_db = '';

    public function __construct() {
        $this->_db = M('goods');
    }
    public function addRealQuantity($realQuantity,$id){
        $data['real_quantity']=$realQuantity;
        $res=$this->_db->where("id='$id'")->save($data);
        return $res;
    }
}