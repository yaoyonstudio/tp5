<?php

function publicTestFun () {
    return 'public test fun';
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


/**
 * 检查上传图片是否符合条件并上传图片，返回图片路径
 *
 * @param $_FILES ["img"]
 * @return 返回一个数组
 *      status: 检查的状态
 *      errorMsg: 错误信息
 *      path: 上传后的路径
 */
function checkUploadImg($file)
{
    $uploadMsg = array(
        "status" => 1,
        "errorMsg" => "",
        "path" => ""
    );
    $target_dir = "static/upload/slide/";
    $dayDirName = $target_dir . date("Ymd", time());
    if (!is_dir($dayDirName)) {
        mkdir($dayDirName);
    }
    $ext = pathinfo($file["name"], PATHINFO_EXTENSION);
    $uploadMsg["path"] = $dayDirName . '/' . time() . rand(100000, 999999) . '.' . $ext;
    $isImage = getimagesize($file["tmp_name"]);
    if ($isImage !== false) {
        if (move_uploaded_file($file["tmp_name"], $uploadMsg["path"])) {
            $uploadMsg["status"] = 1;
        } else {
            $uploadMsg["status"] = 0;
            $uploadMsg["errorMsg"] = "上传失败";
        }
    } else {
        $uploadMsg["status"] = 0;
        $uploadMsg["errorMsg"] = "上传的不是图片";
    }
    if ($file["size"] > 5000000) {
        $uploadMsg["status"] = 0;
        $uploadMsg["errorMsg"] = "上传图片不能超过5M";
    }
    if ($ext != "jpg" && $ext != "png" && $ext != "jpeg" && $ext != "gif") {
        $uploadMsg["status"] = 0;
        $uploadMsg["errorMsg"] = "上传图片格式不正确";
    }
    return $uploadMsg;
}


/**
 * 图片裁切
 * @param 图片原路径
 * @param 新图片保存路径
 * @param 新图片的宽度
 * @param 新图片的高度
 */
function my_image_resize($src_file, $dst_file, $new_width, $new_height)
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