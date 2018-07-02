<?php
return array(
	//'配置项'=>'配置值'
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => '101.200.125.126', // 服务器地址
    'DB_NAME'   => 'student2', // 数据库名
    'DB_USER'   => 'student2', // 用户名
    'DB_PWD'    => 'student123', // 密码
    'DB_PORT'   => 3306, // 端口
    'DB_PREFIX' => 't_', // 数据库表前缀
    'DB_CHARSET'=> 'utf8', // 字符集
    'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志 3.2.3新增
);


function  show($status, $message,$data=array()) {
    $reuslt = array(
        'status' => $status,
        'message' => $message,
        'data' => $data,
    );

    exit(json_encode($reuslt));
}