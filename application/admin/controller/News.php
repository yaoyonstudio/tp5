<?php
namespace app\admin\controller;

use app\api\model\News as NewsModel;

use think\Controller;
use think\Request;
use think\Db;

class News extends Controller
{
    public function index()
    {
        $name = "我的网站";
        $this->assign("name", $name);

        $name = "新闻列表";
        $data = array();

        $newslist = Db::name('news')->join('news_categories', 'news.cat_id = news_categories.cat_id')->field('news_id,cat_name,news_type,news_title,news_souce,editor_id')->select();
        $couter = Db::name('news')->where('news_isopen', 1)->count();

        $data["draw"] = 1;
        $data["recordsTotal"] = $couter;
        $data["recordsFiltered"] = $couter;
        $data["data"] = $newslist;

        $this->assign("name", $name);
        $this->assign('newslist', $newslist);


        return $this->fetch();
    }

    //添加新闻页面
    public function addnews()
    {
        //获取分类
        $news_categories = Db::table('news_categories')->select();
        $this->assign('news_categories', $news_categories);

        return $this->fetch();
    }

    //添加新闻
    public function createnews()
    {
        $img_id = "";

        ///////////////////////////////////////////////////////////////////////////////////
        //////////////////////  上传图片处理并返回图片ID开始  /////////////////////////////
        ///////////////////////////////////////////////////////////////////////////////////
        //当选择文章类型（自动、无图、一图、多图）的不同情况，图片上传及字段img_id的处理
        switch ($_POST['news_type']) {
            case "0":
                if (array_key_exists('editorValue', $_POST)) {
                    $imgCount = count($this->getImgs($_POST['editorValue']));
                    if ($imgCount > 2) {
                        $img_idArr = [];
                        $img_id = "";
                        for ($i = 0; $i < 3; $i++) {
                            $imgData = $this->getImageData($_POST['news_title'], $this->getImgs($_POST['editorValue'])[$i]);
                            if ($imgData) {
                                $img_idArr[] = Db::table('news_images')->insertGetId($imgData);
                            }
                        }
//                        print_r($img_id);
                        $img_id = implode(",", $img_idArr);
                        $news_type = 3;
                    } elseif ($imgCount > 0) {
                        $img_id = 0;
                        $img_originUrl = $this->getImgs($_POST['editorValue'], 0);
                        $imgData = $this->getImageData($_POST['news_title'], $img_originUrl);
                        if ($imgData) {
                            $img_id = Db::table('news_images')->insertGetId($imgData);
                            $news_type = 2;
                        }
                    } else {
                        $news_type = 1;
                    }
                }
                break;
            case "2":
                //检查上传图片是否符合条件
                $checkImg = $this->checkUploadImg($_FILES["img"]);
                if ($checkImg["status"] == 0) {
                    echo '<script>alert("' . $checkImg["errorMsg"] . '");location.href="addnews"</script>';
                } else {
                    if (move_uploaded_file($_FILES["img"]["tmp_name"], $checkImg["path"])) {
                        //上传成功
//                        echo $checkImg["path"];
                        $img_id = 0;
                        //上传成功后将图片再裁切多两个尺寸，并生成插入图片表的数据格式
                        $imgData = $this->getUploadImageData($_POST['news_title'], $checkImg["path"]);
                        //插入图片表并返回图片表ID
                        if ($imgData) {
                            $img_id = Db::table('news_images')->insertGetId($imgData);
//                            echo $img_id;
                        }
                    } else {
                        $errorMsg = "上传图片有误";
                        echo '<script>alert("' . $errorMsg . '");location.href="/admin/News/addnews"</script>';
                    }
                }
                break;
            case "3":
                $imgArray = $this->reArrayFiles($_FILES["img"]);
                $img_idArr = [];

                foreach ($imgArray as $img) {
                    //检查上传图片是否符合条件
                    $checkImg = $this->checkUploadImg($img);
                    if ($checkImg["status"] == 0) {
                        echo '<script>alert("' . $checkImg["errorMsg"] . '");location.href="/admin/News/addnews"</script>';
                    } else {
                        if (move_uploaded_file($img["tmp_name"], $checkImg["path"])) {
                            //上传成功
                            //上传成功后将图片再裁切多两个尺寸，并生成插入图片表的数据格式
                            $imgData = $this->getUploadImageData($_POST['news_title'], $checkImg["path"]);
                            //插入图片表并返回图片表ID
                            if ($imgData) {
                                $img_idArr[] = Db::table('news_images')->insertGetId($imgData);
                            }
                        } else {
                            $errorMsg = "上传图片有误";
                            echo '<script>alert("' . $errorMsg . '");location.href="/admin/News/addnews"</script>';
                        }
                    }
                }
                $img_id = implode(",", $img_idArr);
            default:
                break;
        }
        ///////////////////////////////////////////////////////////////////////////////////
        //////////////////////  上传图片处理并返回图片ID结束  /////////////////////////////
        ///////////////////////////////////////////////////////////////////////////////////

        //整理一条完整文章记录的信息对象
        $data = [
            "news_title" => $_POST['news_title'],
            "news_keywords" => $_POST['news_keywords'],
            "news_description" => $_POST['news_description'],
            "news_souce" => $_POST['news_souce'],
            "news_soucelink" => $_POST['news_soucelink'],
            "news_publish_time" => strtotime($_POST['news_publish_time']),
            "news_isopen" => $_POST['news_isopen'],
            "news_isrecommend" => $_POST['news_isrecommend'],
            "cat_id" => $_POST['cat_id'],
            "news_content" => $_POST['editorValue'],
            "img_id" => $img_id,
            "news_type" => $_POST['news_type'],
            "create_time" => time(),
            "update_time" => time(),
            "editor_id" => 1
        ];

        //插入文章记录到数据库
        $news_id = Db::table('news')->insertGetId($data);
        if ($news_id) {
            echo '<script>alert("文章插入成功！");location.href="/admin/News/addnews"</script>';
        }
    }

    public function newslist()
    {
        $name = "新闻列表";
        $data = array();

        $newslist = Db::name('news')->join('news_categories', 'news.cat_id = news_categories.cat_id')->field('news_id,cat_name,news_type,news_isopen,news_title,news_souce,editor_id')->select();
        $couter = Db::name('news')->count();

        $data["draw"] = 1;
        $data["recordsTotal"] = $couter;
        $data["recordsFiltered"] = $couter;
        $data["data"] = $newslist;

        $this->assign("name", $name);
        $this->assign('newslist', $newslist);
        return $this->fetch();
    }

    public function getnewslist()
    {
        $data = array();

        if ($_GET) {
            $start = $_GET['start'] ? $_GET['start'] : 0;
            $length = $_GET['length'] ? $_GET['length'] : 10;
            $draw = $_GET["draw"] ? $_GET["draw"] : 1;
            $keyword = $_GET['search']['value'] ? $_GET['search']['value'] : '';
        } else {
            $start = 0;
            $length = 10;
            $draw = 1;
            $keyword = '';
        }

//        $map['news_isopen'] = ['=', 1];

        $newslist = Db::name('news')
            ->join('news_categories', 'news.cat_id = news_categories.cat_id')
            ->join('user', 'news.editor_id = user.user_id')
            ->field('news_id,cat_name,news_title,news_type,news_souce,editor_id, user_name, news_isopen')
//            ->where($map)
            ->where('news_title|cat_name|news_souce', 'like', '%' . $keyword . '%')
            ->order('news_publish_time desc, news_id')
            ->limit($start, $length)
            ->select();
        $couter = Db::name('news')->where('news_isopen', 1)->count();

        $data["draw"] = $draw;
        $data["recordsTotal"] = $couter;
        $data["recordsFiltered"] = $couter;
        $data["data"] = $newslist;

//        dump($data);die;
        echo json_encode($data);
    }

    ///////////////////////////////////////////////////////////////

    //获取、生成插入图片表的数据，供上传图片保存到图片表里提供数据（此函数用于处理上传图片使用）
    public function getUploadImageData($title, $originUrl)
    {
        if ($originUrl) {
            $imgData = array();
            $uploadUeditorDir = "static/upload/";
            //用于生成缩略图和中图
            $fileSrc = strstr($originUrl, 'image/');
            $filenames = explode('.', $fileSrc);
            //用于插入数据库
            $fileUrl = explode('.', $originUrl);

            $this->my_image_resize($originUrl, $uploadUeditorDir . $filenames[0] . '_m.' . $filenames[1], '320px', '178px');
            $this->my_image_resize($originUrl, $uploadUeditorDir . $filenames[0] . '_s.' . $filenames[1], '220px', '144px');

            $thumbImg = getimagesize($fileUrl[0] . '_s.' . $fileUrl[1]);
            $commonImg = getimagesize($fileUrl[0] . '_m.' . $fileUrl[1]);
            $originImg = getimagesize($originUrl);

            $imgData = array(
                "img_title" => $title,
                "img_originUrl" => '/' . $originUrl,
                "img_thumbUrl" => '/' . $fileUrl[0] . '_s.' . $fileUrl[1],
                "img_commonUrl" => '/' . $fileUrl[0] . '_m.' . $fileUrl[1],
                "img_thumbWidth" => $thumbImg[0],
                "img_thumbHeight" => $thumbImg[1],
                "img_commonWidth" => $commonImg[0],
                "img_commonHeight" => $commonImg[1],
                "img_originWidth" => $originImg[0],
                "img_originHeight" => $originImg[1],
                "create_time" => time(),
                "update_time" => time()
            );

            return $imgData;
        } else {
            return false;
        }
    }


    //检查上传图片是否符合条件，并返回一个数组，其中有三个元素，一是检查的状态
    /**
     * 检查上传图片是否符合条件
     *
     * @param $_FILES ["img"]
     * @return 返回一个数组
     *      status: 检查的状态
     *      errorMsg: 错误信息
     *      path: 上传后的路径
     */
    public function checkUploadImg($file)
    {
        $uploadMsg = array(
            "status" => 1,
            "errorMsg" => "",
            "path" => ""
        );
        $target_dir = "static/upload/image/";
        $dayDirName = $target_dir . date("Ymd", time());
        if (!is_dir($dayDirName)) {
            mkdir($dayDirName);
        }
        $ext = pathinfo($file["name"], PATHINFO_EXTENSION);
        $uploadMsg["path"] = $dayDirName . '/' . time() . rand(100000, 999999) . '.' . $ext;
        $isImage = getimagesize($file["tmp_name"]);
        if ($isImage !== false) {
            $uploadMsg["status"] = 1;
        } else {
            $uploadMsg["status"] = 0;
            $uploadMsg["errorMsg"] = "上传的不是图片";
        }
        if ($file["size"] > 5000000) {
            $uploadMsg["status"] = 0;
            $uploadMsg["errorMsg"] = "上传图片不能超过5M";
        }
        if ($ext != "jpg" && $ext != "png" && $ext != "jpeg"
            && $ext != "gif"
        ) {
            $uploadMsg["status"] = 0;
            $uploadMsg["errorMsg"] = "上传图片格式不正确";
        }
        return $uploadMsg;
    }


    /**
     * 用于转置多个图片上传时$_FILES数组，便于遍历每个图片处理
     * @param $_FILES ["img"]
     * @return 返回转置后的数组，每个单独图片的信息是数组的一个元素
     */
    public function reArrayFiles($file)
    {
        $file_ary = array();
        $file_count = count($file['name']);
        $file_key = array_keys($file);

        for ($i = 0; $i < $file_count; $i++) {
            foreach ($file_key as $val) {
                $file_ary[$i][$val] = $file[$val][$i];
            }
        }
        return $file_ary;
    }


    /**
     * 获取、生成插入图片表的数据，供上传图片保存到图片表里提供数据（此函数用于处理自动获取文章中插入的图片使用）
     * @param 图片标题
     * @param 图片路径
     * @return 返回一条图片记录的完整字段对象
     */
    public function getImageData($title, $originUrl)
    {
        if ($originUrl) {
            $imgData = array();
            $uploadUeditorDir = "static/upload/ueditor/";
            //用于生成缩略图和中图
            $fileSrc = strstr($originUrl, 'image/');
            $filenames = explode('.', $fileSrc);
            //用于插入数据库
            $fileUrl = explode('.', $originUrl);

            $this->my_image_resize(substr($originUrl, 1), $uploadUeditorDir . $filenames[0] . '_m.' . $filenames[1], '320px', '178px');
            $this->my_image_resize(substr($originUrl, 1), $uploadUeditorDir . $filenames[0] . '_s.' . $filenames[1], '220px', '144px');

            $thumbImg = getimagesize(substr($fileUrl[0] . '_s.' . $fileUrl[1], 1));
            $commonImg = getimagesize(substr($fileUrl[0] . '_m.' . $fileUrl[1], 1));
            $originImg = getimagesize(substr($originUrl, 1));

            $imgData = array(
                "img_title" => $title,
                "img_originUrl" => $originUrl,
                "img_thumbUrl" => $fileUrl[0] . '_s.' . $fileUrl[1],
                "img_commonUrl" => $fileUrl[0] . '_m.' . $fileUrl[1],
                "img_thumbWidth" => $thumbImg[0],
                "img_thumbHeight" => $thumbImg[1],
                "img_commonWidth" => $commonImg[0],
                "img_commonHeight" => $commonImg[1],
                "img_originWidth" => $originImg[0],
                "img_originHeight" => $originImg[1],
                "create_time" => time(),
                "update_time" => time()
            );
            return $imgData;
        } else {
            return false;
        }
    }




    /**
     * 图片裁切
     * @param 图片原路径
     * @param 新图片保存路径
     * @param 新图片的宽度
     * @param 新图片的高度
     */
    //图片裁切
    public function my_image_resize($src_file, $dst_file, $new_width, $new_height)
    {
        $new_width = intval($new_width);
        $new_height = intval($new_width);
        if ($new_width < 1 || $new_height < 1) {
            echo "params width or height error !";
            exit();
        }
        if (!file_exists($src_file)) {
            echo $src_file . " is not exists !";
            exit();
        }
        // 图像类型
        $type = exif_imagetype($src_file);
        $support_type = array(IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_GIF);
        if (!in_array($type, $support_type, true)) {
            echo "this type of image does not support! only support jpg , gif or png";
            exit();
        }
        //Load image
        switch ($type) {
            case IMAGETYPE_JPEG :
                $src_img = imagecreatefromjpeg($src_file);
                break;
            case IMAGETYPE_PNG :
                $src_img = imagecreatefrompng($src_file);
                break;
            case IMAGETYPE_GIF :
                $src_img = imagecreatefromgif($src_file);
                break;
            default:
                echo "Load image error!";
                exit();
        }
        $w = imagesx($src_img);
        $h = imagesy($src_img);
        $ratio_w = 1.0 * $new_width / $w;
        $ratio_h = 1.0 * $new_height / $h;
        $ratio = 1.0;
        // 生成的图像的高宽比原来的都小，或都大 ，原则是 取大比例放大，取大比例缩小（缩小的比例就比较小了）
        if (($ratio_w < 1 && $ratio_h < 1) || ($ratio_w > 1 && $ratio_h > 1)) {
            if ($ratio_w < $ratio_h) {
                $ratio = $ratio_h; // 情况一，宽度的比例比高度方向的小，按照高度的比例标准来裁剪或放大
            } else {
                $ratio = $ratio_w;
            }
            // 定义一个中间的临时图像，该图像的宽高比 正好满足目标要求
            $inter_w = (int)($new_width / $ratio);
            $inter_h = (int)($new_height / $ratio);
            $inter_img = imagecreatetruecolor($inter_w, $inter_h);
            //var_dump($inter_img);
            imagecopy($inter_img, $src_img, 0, 0, 0, 0, $inter_w, $inter_h);
            // 生成一个以最大边长度为大小的是目标图像$ratio比例的临时图像
            // 定义一个新的图像
            $new_img = imagecreatetruecolor($new_width, $new_height);
            //var_dump($new_img);exit();
            imagecopyresampled($new_img, $inter_img, 0, 0, 0, 0, $new_width, $new_height, $inter_w, $inter_h);
            switch ($type) {
                case IMAGETYPE_JPEG :
                    imagejpeg($new_img, $dst_file, 5); // 存储图像
                    break;
                case IMAGETYPE_PNG :
                    imagepng($new_img, $dst_file, 5);
                    break;
                case IMAGETYPE_GIF :
                    imagegif($new_img, $dst_file, 5);
                    break;
                default:
                    break;
            }
        } // end if 1
        // 2 目标图像 的一个边大于原图，一个边小于原图 ，先放大平普图像，然后裁剪
        // =if( ($ratio_w < 1 && $ratio_h > 1) || ($ratio_w >1 && $ratio_h <1) )
        else {
            $ratio = $ratio_h > $ratio_w ? $ratio_h : $ratio_w; //取比例大的那个值
            // 定义一个中间的大图像，该图像的高或宽和目标图像相等，然后对原图放大
            $inter_w = (int)($w * $ratio);
            $inter_h = (int)($h * $ratio);
            $inter_img = imagecreatetruecolor($inter_w, $inter_h);
            //将原图缩放比例后裁剪
            imagecopyresampled($inter_img, $src_img, 0, 0, 0, 0, $inter_w, $inter_h, $w, $h);
            // 定义一个新的图像
            $new_img = imagecreatetruecolor($new_width, $new_height);
            imagecopy($new_img, $inter_img, 0, 0, 0, 0, $new_width, $new_height);
            switch ($type) {
                case IMAGETYPE_JPEG :
                    imagejpeg($new_img, $dst_file, 100); // 存储图像
                    break;
                case IMAGETYPE_PNG :
                    imagepng($new_img, $dst_file, 100);
                    break;
                case IMAGETYPE_GIF :
                    imagegif($new_img, $dst_file, 100);
                    break;
                default:
                    break;
            }
        }// if3
    }// end function


    /**
     * 从文章内容中取出图片
     * @param 文章内容
     * @param 图片位置索引 ，第几个图片
     */
    public function getImgs($content, $order = 'ALL')
    {
        $pattern = "/<img.*?src=[\'|\"](.*?(?:[\.gif|\.jpg]))[\'|\"].*?[\/]?>/";
        preg_match_all($pattern, $content, $match);
        if (isset($match[1]) && !empty($match[1])) {
            if ($order === 'ALL') {
                return $match[1];
            }
            if (is_numeric($order) && isset($match[1][$order])) {
                return $match[1][$order];
            }
        }
        return '';
    }

    /**
     * 生成随机文件名函数
     * @param 文件名长度
     * @param 文件名
     */
    function random($length)
    {
        $hash = 'CR-';
        $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz';
        $max = strlen($chars) - 1;
        mt_srand((double)microtime() * 1000000);
        for ($i = 0; $i < $length; $i++) {
            $hash .= $chars[mt_rand(0, $max)];
        }
        return $hash;
    }


    //编辑新闻页面
    public function newsedit()
    {
        $id = $_GET['id'];
        if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($id)) {
            $newsinfo = Db::name('news')->join('news_categories', 'news.cat_id = news_categories.cat_id')->field('news_id, news_title, news.cat_id, news.img_id, cat_name, news_keywords, news_description, news_content, news_type, news_souce, news_soucelink, news_file_url, editor_id, news_hits, news_publish_time, news_good_count, news_bad_count, news_isopen, news_isrecommend')->find($id);
            $newsinfo['news_publish_time'] = date("Y-m-d", $newsinfo['news_publish_time']);
            $imgIds = explode(',', $newsinfo['img_id']);
            foreach ($imgIds as $v) {
                $images[] = Db::name('news_images')->field('img_id, img_title, img_thumbUrl, img_commonUrl, img_originUrl')->find($v);
            }
            $this->assign('news_images', $images);
            $this->assign('newsinfo', $newsinfo);
        } else {
            $this->error("请求错误");
        }
        //获取分类
        $news_categories = Db::table('news_categories')->select();
        $this->assign('news_categories', $news_categories);

        return $this->fetch();
    }

    //保存编辑的新闻
    public function savenews()
    {
//        dump($_POST);
//        dump($_FILES);

        $row = Db::table('news')->where('news_id', $_POST['news_id'])->update([
            'news_title' => $_POST['news_title'],
            'news_keywords' => $_POST['news_keywords'],
            'news_souce' => $_POST['news_souce'],
            'news_soucelink' => $_POST['news_soucelink'],
            'news_publish_time' => strtotime($_POST['news_publish_time']),
            'news_isopen' => $_POST['news_isopen'],
            'news_isrecommend' => $_POST['news_isrecommend'],
            'cat_id' => $_POST['cat_id'],
            'news_type' => $_POST['news_type'],
            'news_description' => $_POST['news_description'],
            'img_id' => $_POST['img_id'],
            'news_content' => $_POST['editorValue'],
            'update_time' => time()
        ]);

        if($row){
            echo '<script>alert("文章修改成功！");location.href="/admin/News/newslist"</script>';
        }else{
            echo '<script>alert("文章修改失败！");location.href="/admin/News/newslist"</script>';
        }
    }


    //上传图片
    public function saveImage(){
        dump($_FILES);
        return 1;
    }

}
