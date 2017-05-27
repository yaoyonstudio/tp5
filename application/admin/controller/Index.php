<?php
namespace app\admin\controller;

use app\api\model\News as NewsModel;

use think\Controller;
use think\Request;
use think\Db;

class Index extends Controller
{
    public function index(){
        $name = "我的网站";
        $this->assign("name", $name);
        return $this->fetch();
    }

    public function admin(){
        $name = "我的网站";
        $this->assign("name", $name);
        return $this->fetch();
    }



}
