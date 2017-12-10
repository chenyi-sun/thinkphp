<?php
namespace app\index\controller;
use think\Request;
use think\Controller;
class Signin extends Controller
{
    public function index(Request $request){
        // var_dump($request);
        // return $this -> fetch('index');
        return view('index',
        [
            'email'=> '1878009s@qq.com',
            'name' => 'askddd name'
        ],[
            'STATIC' => '<h1 onclick="alert(\'ddd\')">ddddd</h1>',
            'TT' => '<h2>dddddddyy</h2>'
        ]);
    }
    public function ask(){
        $this -> assign('ass','ddddddd');
        return $this -> fetch('index',[
            'email' => 'ddddd',
            'ddd' => 'ddsd'
        ]);
    }
    public function test1(Request $request){
        $this -> assign('assign', 'dddddd水水水水');
        var_dump($request->domain());
        var_dump($request->method());
        var_dump($request->isPost());
        var_dump($request->isGet());
        var_dump($request->isAjax());
        // var_dump($request->param()['di']);
        var_dump($request->param());
        var_dump($request->session());
        return view('public/index');
    }
    public function session1(Request $request){
        var_dump($request->session());
        var_dump($request->action());
        $num = $request -> action();
        $num == 'session1'?$this->assign('as','dddddss'):$this->assign('as','ddd');
        cookie('sss','ddd');
        if($request->param()['id']){
           $this->assign('as',$request->param()['id']); 
        }
        return view('public/index');
    }
}

