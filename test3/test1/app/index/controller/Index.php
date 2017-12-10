<?php
namespace app\index\controller;
use app\common\controller\Index as User;
class Index extends User
{
    public function index()
    {
       return view();
    }
    public function hello($name="ddddd"){
        return 'Hello!'.$name;
    }
}
