<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]

// 定义应用目录
define('APP_PATH', __DIR__ . '/../app/');
// 加载框架引导文件
require __DIR__ . '/../thinkphp/start.php';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--<link rel="stylesheet" href="./index.bundle.css"/>-->
</head>
<body>
    <?php 

    ?>
    <form action="http://www.testth.com/public/index.php/Index/index/hello">
    <!--
        index.php
        /Index/ 模块
        /index/ 控制器
        /hello  操作
    -->
        <input type="text" value="ssss" name="name"/>
        <input type="submit" value="提交"/>
    </form>
    <form action="http://www.testth.com/public/index.php/Index/index/index">
        <input type="text" value="ssss" name="name"/>
        <input type="submit" value="提交"/>

        
    </form>

</body>
</html>
