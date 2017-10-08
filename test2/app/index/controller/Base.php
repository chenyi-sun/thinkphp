<?php
namespace app\index\controller;
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
}
