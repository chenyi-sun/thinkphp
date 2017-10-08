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
    public function test1(){
        $this -> assign('assign', 'dddddd水水水水');
        $this -> display('index');
    }
}

