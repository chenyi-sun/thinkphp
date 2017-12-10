<?php
namespace app\index\controller;
use think\Request;
use app\common\controller\Index as User;
class Base extends User
{
    public function index()
    {
       return $this->ask();
    }
    public function hello($name="ddddd"){
        return 'Hello dlksllsklkls!';
    }
    public function info($id){
        echo 'sdss';
        echo "<br/>";
        return "{$id}";
    }
    /*获取参数*/
    public function reques(){
       $request = Request::instance();
       var_dump($request);
    }
    public function reques2(Request $request){
       var_dump($request);//推荐这种.获取参数
    }
    /*获取参数结束*/

    /*视图层*/
    public function view1(){
        return view();
    }
    public function view2(){
        return view('public/index');
    }
    public function view3(){
        return view('./index.html');//访问public下的index.html页面
    }
    public function view4(){
        return view('./html/index.html');//访问public下的index.html页面
    }


    /*视图层结束*/
}
