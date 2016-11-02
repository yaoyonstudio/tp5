<?php

namespace app\api\controller;

use think\Controller;
use think\Request;
use think\Db;

class Config extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index(Request $request){
        $data = [];
        $result = [];

        $group_id = !is_null($request->param('group_id')) ? $request->param('group_id') : null;

        if($group_id){
            $config = Db::name('config')->where('config_group', $group_id)->select();
            foreach ($config as $key => $value) {
                $data[$value['config_key']] = $value['config_value'];
            }
        }else{
            $config = Db::name('config')->select();
        }

        foreach ($config as $key => $value) {
            $data[$value['config_key']] = $value['config_value'];
        }

        if($config && $data){
            $result['data'] = $data;
            $result['status'] = true;
        }else{
            $result['errorMsg'] = '请求错误';
            $result['status'] = false;
        }
        
        return json($result);
    }


    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
        $data = $request->param();

        if(is_null($request->param('config_key')) || is_null($request->param('config_value'))){
            $result["errorMsg"] = "字段不能为空";
            $result["status"] = false;
        }else{
            $config_key = $request->param('config_key');
            $record = Db::table('config')->where('config_key', $config_key)->find();

            if(!is_null($record)){
                $result["errorMsg"] = "配置表中已有该配置项。";
                $result["status"] = false;
            }else{
                $createRst = Db::name('config')->insert($data);

                if($createRst){
                    $result["data"] = $data;
                    $result["status"] = true;
                }else{
                    $result["errorMsg"] = "添加错误";
                    $result["status"] = false;
                }
            }
        }
        
        return json($result);
    }


    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {

    }


    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = $request->param();

        //此控制器为RESTful控制器，此处的$id即网址路径后附带参数，因配置表使用config_key作为标识，此处传入的$id即为config_key本身，网址示例：localhost/api/config/site_lang
        $config_key = $id;

        if(is_null($request->param('config_key')) || is_null($request->param('config_value'))){
            $result["errorMsg"] = "字段不能为空";
            $result["status"] = false;
        }else{
            $record = Db::table('config')->where('config_key', $config_key)->find();

            if(is_null($record)){
                $result["errorMsg"] = "不存在该配置项";
                $result["status"] = false;
            }else{
                $updateRst = Db::table('config')->where('config_key', $config_key)->update(['config_key' => $request->param('config_key'), 'config_value' => $request->param('config_value'), 'config_group' => $request->param('config_group'), 'config_desc' => $request->param('config_desc')]);
                if($updateRst){
                    $result["data"] = $updateRst;
                    $result["status"] = true;
                }else{
                    $result["errorMsg"] = "配置项修改错误";
                    $result["status"] = false;
                }
            }
        }
        return json($result);
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete(Request $request, $id)
    {
        //
        //此控制器为RESTful控制器，此处的$id即网址路径后附带参数，因配置表使用config_key作为标识，此处传入的$id即为config_key本身，网址示例：localhost/api/config/site_lang
        $config_key = $id;
        $record = Db::table('config')->where('config_key', $config_key)->find();

        if(is_null($record)){
            $result["errorMsg"] = "不存在该配置项";
            $result["status"] = false;
        }else{
            $deleteRst = Db::table('config')->where('config_key', $config_key)->delete();
            if($deleteRst){
                $result["data"] = $deleteRst;
                $result["status"] = true;
            }else{
                $result["errorMsg"] = "配置项删除错误";
                $result["status"] = false;
            }
        }
        return json($result);
    }
}
