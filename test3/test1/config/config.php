<?php
use think\Env;

return [
    // 入口自动绑定模块
    'auto_bind_module'       => true,
    // 是否开启路由
    'url_route_on'           => true,
    // 是否强制使用路由
    'url_route_must'         => false,
    'view_replace_str'       => [
        '__123__' => '2222222'
    ],
    //连接数据库的方法
    'DB_TYPE' => 'mysql',
    'DB_HOST' => 'localhost',
    'DB_NAME' => 'thinkphp',
    'DB_USER' => 'root',
    'DB_PWD'  => 'newpassword',
    'DB_PORT' => '3306'
]

?>