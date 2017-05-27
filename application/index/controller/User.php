<?php
namespace app\index\controller;

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
}
