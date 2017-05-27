<?php
namespace app\admin\controller;

use app\api\model\Slide;

use think\Controller;
use think\Request;
use think\Db;

class Slides extends Controller
{
    public function index()
    {
        $data = array();
        $slides = Slide::all();

        foreach($slides as $key=>$slide){
            $data[] = $slide->toArray();
        }

        $this->assign('slides', $data);
        return $this->fetch();
    }

    public function addSlide()
    {
        return $this->fetch();
    }

    public function createSlide()
    {
        if (isset($_FILES['slide_src'])) {
            $imgUploadRst = checkUploadImg($_FILES['slide_src']);
            if ($imgUploadRst['status'] && $imgUploadRst['path']) {
                $slide = new Slide;
                $slide->data([
                    'slide_title' => isset($_POST['slide_title']) ? $_POST['slide_title'] : null,
                    'slide_link' => isset($_POST['slide_link']) ? $_POST['slide_link'] : null,
                    'slide_src' => $imgUploadRst['path'],
                    'create_time' => time(),
                    'update_time' => time()
                ]);
                $slide->save();
                if ($slide->slide_id) {
                    echo '<script>alert("滑动图添加成功！");location.href="/admin/Slides/index"</script>';
                } else {
                    echo '<script>alert("滑动图添加失败！");</script>';
                }
            } else {
                echo '<script>alert("'. $imgUploadRst['errorMsg'] .'");</script>';
            }
        } else {
            echo '<script>alert("请上传滑动图片！");</script>';
        }
    }

    public function editSlide() {
        dump($_GET['slide_id']);
        $slideId = $_GET['slide_id'];
        if ($slideId) {
            echo $slideId;
        } else {
            echo '<script>alert("非法请求！");</script>';
        }
        return $this->fetch();
    }
}