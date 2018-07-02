<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/17
 * Time: 20:28
 */
namespace Html\Model;
use Think\Model;
class OrderModel extends Model
{
    private $_db = '';

    public function __construct() {
        $this->_db = M('order');
    }
    public function rank(){
        $res=$this->_db->max("rank");
        $res++;
        return $res;

    }
}