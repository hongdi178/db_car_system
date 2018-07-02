<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller{
    public function hello(){
        echo 'hello,thinkphp!';
    }
    public function test(){
            echo 'test';
        $this->display('index');
    }
    public function index(){

        $this->display();
    }
    public function password(){
        $this->display();
    }

}
