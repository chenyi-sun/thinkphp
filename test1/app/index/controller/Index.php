<?php
namespace app\index\controller;
use app\common\controller\Index as User;
use think\Db;
class Index extends User
{
    public function index()
    {
        dump(config());
    //    return view();
    }
    public function databse($name="ddddd"){
        $res = Db::connect();
        dump($res);
        return 'Hello!'.$name;
    }
    public function ass(){
        dump(config());
    }
    public function ddd(){
        return $this->ask();
    }
}
