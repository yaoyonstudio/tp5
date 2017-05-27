<?php
namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\Db;

class User extends Controller
{
    public function index()
    {

    }

    public function login(){
        return $this->fetch();
    }

    public function doLogin(){
        if($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_POST['submit'])){
            dump('ddd');
            $username = $_POST['username'];
            $password = $_POST['password'];

            $userinfo = Db::name('user')->where("user_name ='$username'")->find();

            if($userinfo){

            }



        }else{
            $this->error("登录错误");
        }
    }
}
