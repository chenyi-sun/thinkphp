<?php
namespace app\admin\controller;
use app\common\controller\Index as User;

class Index{
    public function index(){
        $common = new User();
        $common ->ask();
        return '<br/>ssss';
    }
    public function admin(){
        return 'djsh';
    }
}

?>