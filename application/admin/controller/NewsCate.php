<?php
namespace app\admin\controller;

use app\api\model\NewsCategories;

use think\Controller;
use think\Request;
use think\Db;

class NewsCate extends Controller
{
    public function index()
    {
        $type = isset($_GET['type']) ? $_GET['type'] : 1;
        $data = array();

        $newsCategories = Db::name('news_categories')->field('cat_id, cat_name, cat_group, parent_id, type')->where('type', $type)->where('parent_id', 0)->select();
        $counter = Db::name('news_categories')->where('type', 1)->count();

        foreach ($newsCategories as $key => $value) {
            $sub = Db::name('news_categories')->field('cat_id, cat_name, cat_group, parent_id, type')->where('type', 1)->where('parent_id', $value['cat_id'])->select();
            if ($sub) {
                $newsCategories[$key]['sub'] = $sub;
            } else {
                $newsCategories[$key]['sub'] = array();
            }
        }

        $this->assign('type', $type);
        $this->assign('newsCategories', $newsCategories);

        return $this->fetch();
    }

    public function addcate()
    {
        $map['parent_id'] = 0;
        $map['type'] = 1;
        $newsCategories = Db::name('news_categories')->field('cat_id, cat_name, cat_group, parent_id, type')->where($map)->select();

        $this->assign('newsCategories', $newsCategories);
        return $this->fetch();
    }

    public function createcate()
    {
        // model助手函数实例化模型
        $cate = new NewsCategories;
        // 模型对象赋值
        $cate->data([
            'cat_name' => $_POST['cat_name'],
            'cat_group' => $_POST['cat_group'],
            'parent_id' => isset($_POST['parent_id']) ? $_POST['parent_id'] : 0,
            'type' => $_POST['type'],
            'create_time' => time(),
            'update_time' => time()
        ]);
//        dump($_POST);
        $cate->save();
        if ($cate->cat_id) {
            echo '<script>alert("类别标签插入成功！");location.href="/admin/NewsCate/index"</script>';
        } else {
            echo '<script>alert("类别标签添加失败！");</script>';
        }
    }
}