<?php
namespace app\index\controller;
use app\common\controller\Index as User;
class Index extends User
{
    public function __construct(){
        config('dddd','ssss');
        
    }
    public function index()
    {
        //$ss = new base();
    //    return $this->ask();
         dump(config('dddd'));
        $res = [
            'sss' => 'ddd'
        ];
        $res2 = [
            'sss' => 'dsss'
        ];
        dump(array_merge($res, $res2));
    }
    public function hello($name="ddddd"){
        return 'Hello!'.$name;
    }
}
