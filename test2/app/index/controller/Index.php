<?php
namespace app\index\controller;
use app\common\controller\Index as User;
class Index extends User
{
    public function index()
    {
        //$ss = new base();
       return $this->ask();
        //  dump(config());
    }
    public function hello($name="ddddd"){
        return 'Hello!'.$name;
    }
}
