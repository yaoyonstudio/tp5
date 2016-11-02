<?php

namespace app\api\controller;
use app\api\model\NewsCategories as NewsCategoriesModel;

use think\Controller;
use think\Request;
use think\Loader;

class Categories extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index(Request $request)
    {
        //type类型：1为分类，2为标签
        $type = !is_null($request->param('type')) ? $request->param('type') : null;
        $page = !is_null($request->param('page')) ? $request->param('page') : 1;
        $pagesize = !is_null($request->param('pagesize')) ? $request->param('pagesize') : 10;

        $categories = NewsCategoriesModel::all(function($query) use ( & $type, $page, $pagesize) {
            if($type){
                $query->page($page,$pagesize)->where('type', $type)->field('cat_id,cat_name,cat_group,parent_id,type');
            }else{
                $query->page($page,$pagesize)->field('cat_id,cat_name,cat_group,parent_id,type');
            }
        });

        if($categories){
            $result["data"] = $categories;
            $result["status"] = true;
        }else{
            $result["errorMsg"] = "请求错误";
            $result["status"] = false;
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

        $validate = Loader::validate('CategoriesValid');
        
        if(!$validate->check($data)){
            $result["errorMsg"] = $validate->getError();
            $result["status"] = false;
        }else{
            $createRst = NewsCategoriesModel::create($data);
            if($createRst){
                $result["data"] = $createRst;
                $result["status"] = true;
            }else{
                $result["errorMsg"] = "添加错误";
                $result["status"] = false;
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
        //
        $category = NewsCategoriesModel::get($id);
        if($category){
            $result["data"] = $category;
            $result["status"] = true;

            $result = array(
                "data" => $category,
                "status" => true
            );
            return json($result);
        }else{
            $result["errorMsg"] = "找不到指定的分类/标签";
            $result["status"] = true;
        }
        return json($result);
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

        $validate = Loader::validate('CategoriesValid');
        
        if(!$validate->check($data)){
            $result["errorMsg"] = $validate->getError();
            $result["status"] = false;
        }else{
            $updateRst = NewsCategoriesModel::update($data, ['cat_id' => $id]);
            if($updateRst){
                $result["data"] = $updateRst;
                $result["status"] = true;
            }else{
                $result["errorMsg"] = "分类/标签修改错误";
                $result["status"] = false;
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
    public function delete($id)
    {
        //
        $deleteRst = NewsCategoriesModel::destroy($id);
        if($deleteRst){
            $result["status"] = true;
        }else{
            $result["errorMsg"] = "删除不成功";
            $result["status"] = false;
        }
        return json($result);
    }
}
