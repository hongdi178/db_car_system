<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/9
 * Time: 8:55
 */
namespace Home\Event;

class UserEvent{
    public function login(){
        echo 'login event';

    }
    public function logout(){
        echo  'logout event';
    }
}