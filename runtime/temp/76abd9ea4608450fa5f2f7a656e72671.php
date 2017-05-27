<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"D:\xampp\htdocs\tp5\public/../application/admin\view\news\newsedit.html";i:1479801170;s:49:"../application/admin/view/public/adminHeader.html";i:1495855012;s:49:"../application/admin/view/public/adminFooter.html";i:1479798781;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>后台管理模板</title>
    <link href="/static/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/static/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/static/lib/nprogress/nprogress.css" rel="stylesheet">
    <link href="/static/lib/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="/static/lib/admin/css/custom.min.css" rel="stylesheet">
    <link href="/static/css/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" >
    <link href="/static/css/admin.css" rel="stylesheet" >

    <link href="/static/lib/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="/static/lib/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">

    <link href="/static/lib/jquery.fileupload/jquery.fileupload.css" rel="stylesheet">
    <!--<link href="/static/css/style.css" rel="stylesheet">-->

    <script src="/static/lib/jquery/dist/jquery.min.js"></script>
    <script src="/static/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/static/lib/fastclick/lib/fastclick.js"></script>
    <script src="/static/lib/nprogress/nprogress.js"></script>
    <script src="/static/lib/admin/js/custom.js"></script>
    <script src="/static/js/bootstrap-datepicker.min.js"></script>
    <script src="/static/js/bootstrap-datepicker.zh-CN.min.js"></script>
    <script src="/static/ueditor/ueditor.config.js"></script>
    <script src="/static/ueditor/ueditor.all.min.js"></script>
    <script src="/static/ueditor/lang/zh-cn/zh-cn.js"></script>


    <script src="/static/lib/jquery.fileupload/vendor/jquery.ui.widget.js"></script>
    <script src="/static/lib/jquery.fileupload/vendor/load-image.all.min.js"></script>
    <script src="/static/lib/jquery.fileupload/vendor/canvas-to-blob.min.js"></script>
    <script src="/static/lib/jquery.fileupload/jquery.iframe-transport.js"></script>
    <script src="/static/lib/jquery.fileupload/jquery.fileupload.js"></script>
    <script src="/static/lib/jquery.fileupload/jquery.fileupload-process.js"></script>
    <script src="/static/lib/jquery.fileupload/jquery.fileupload-image.js"></script>
    <script src="/static/lib/jquery.fileupload/jquery.fileupload-validate.js"></script>

</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="admin" class="site_title"><i class="fa fa-paw"></i> <span>后台管理模板</span></a>
                </div>

                <div class="clearfix"></div>

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>网站功能</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-desktop"></i> 图片管理 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="#">General Elements</a></li>
                                    <li><a href="#">Media Gallery</a></li>
                                    <li><a href="#">Typography</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-edit"></i> 资讯管理 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="/admin/News/newslist">资讯管理</a></li>
                                    <li><a href="/admin/News/addnews">新建资讯</a></li>
                                    <li><a href="/admin/NewsCate/index">资讯分类管理</a></li>
                                    <li><a href="/admin/NewsCate/addcate">新建资讯分类</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-table"></i> 用户管理 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="#">Tables</a></li>
                                    <li><a href="#">Table Dynamic</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="menu_section">
                        <h3>附加</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="#">E-commerce</a></li>
                                    <li><a href="#">Projects</a></li>
                                    <li><a href="#">Project Detail</a></li>
                                    <li><a href="#">Contacts</a></li>
                                    <li><a href="#">Profile</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="#">403 Error</a></li>
                                    <li><a href="#">404 Error</a></li>
                                    <li><a href="#">500 Error</a></li>
                                    <li><a href="#">Plain Page</a></li>
                                    <li><a href="#">Login Page</a></li>
                                    <li><a href="#">Pricing Tables</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="/static/img/headpic4.jpg" alt="">admin
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="javascript:;"> Profile</a></li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="badge bg-red pull-right">50%</span>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li><a href="javascript:;">Help</a></li>
                                <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">6</span>
                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                <li>
                                    <a>
                                        <span class="image"><img src="/static/img/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="/static/img/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="/static/img/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="/static/img/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="text-center">
                                        <a>
                                            <strong>See All Alerts</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->


<!-- page content -->
<div class="right_col" role="main">
    <form id="addnewsform" method="post" action="/admin/news/savenews" enctype="multipart/form-data"
          onsubmit="return checkForm()">
        <input type="hidden" name="news_id" value="<?php echo $newsinfo['news_id']; ?>" />
        <table class="table table-hover mytable">
            <tr>
                <td width="20%">新闻标题</td>
                <td><input type="text" id="news_title" name="news_title" placeholder="新闻标题"
                           value="<?php echo $newsinfo['news_title']; ?>"/></td>
            </tr>
            <tr>
                <td width="20%">新闻关键词</td>
                <td><input type="text" name="news_keywords" placeholder="新闻关键词" value="<?php echo $newsinfo['news_keywords']; ?>"/></td>
            </tr>
            <tr>
                <td width="20%">新闻来源</td>
                <td><input type="text" name="news_souce" placeholder="新闻来源" value="<?php echo $newsinfo['news_souce']; ?>"/></td>
            </tr>
            <tr>
                <td width="20%">新闻来源链接</td>
                <td><input type="text" name="news_soucelink" placeholder="新闻来源链接" value="<?php echo $newsinfo['news_soucelink']; ?>"/>
                </td>
            </tr>
            <tr>
                <td width="20%">新闻发布时间</td>
                <td>
                    <div class="input-group date" data-date-format="yyyy-mm-dd">
                        <input type="text" class="form-control" name="news_publish_time"
                               value="<?php echo $newsinfo['news_publish_time']; ?>"/><span class="input-group-addon"><i
                            class="glyphicon glyphicon-th"></i></span>
                    </div>
                </td>
            </tr>
            <tr>
                <td width="20%">新闻是否发布</td>
                <td>
                    <label class="radio-inline">
                        <input type="radio" name="news_isopen" id="inlineRadio1"
                               value="1"  <?php if($newsinfo["news_isopen"] == 1) echo("checked"); ?> /> 是
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="news_isopen" id="inlineRadio2"
                               value="0"  <?php if($newsinfo["news_isopen"] == 0) echo("checked"); ?> /> 否
                    </label>
                </td>
            </tr>
            <tr>
                <td width="20%">新闻是否推荐</td>
                <td>
                    <label class="radio-inline">
                        <input type="radio" name="news_isrecommend" id="inlineRadio1"
                               value="1" <?php if($newsinfo["news_isrecommend"] == 1) echo("checked"); ?> /> 是
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="news_isrecommend" id="inlineRadio2"
                               value="0" <?php if($newsinfo["news_isrecommend"] == 0) echo("checked"); ?> /> 否
                    </label>
                </td>
            </tr>
            <tr>
                <td width="20%">新闻分类</td>
                <td>
                    <select class="form-control" name="cat_id">
                        <?php if(is_array($news_categories) || $news_categories instanceof \think\Collection): $i = 0; $__LIST__ = $news_categories;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $cate['cat_id']; ?>"
                        <?php if($newsinfo["cat_id"]==$cate["cat_id"]) echo("selected");?>><?php echo $cate['cat_name']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td width="20%">新闻类型</td>
                <td>
                    <select class="form-control" name="news_type" id="news_type">
                        <option value="0"
                        <?php if($newsinfo["news_type"]==0) echo("selected");?>>自动</option>
                        <option value="1"
                        <?php if($newsinfo["news_type"]==1) echo("selected");?>>无图</option>
                        <option value="2"
                        <?php if($newsinfo["news_type"]==2) echo("selected");?>>单图</option>
                        <option value="3"
                        <?php if($newsinfo["news_type"]==3) echo("selected");?>>多图</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td width="20%">新闻描述</td>
                <td>
                    <textarea class="form-control" rows="3"
                              name="news_description"><?php echo $newsinfo['news_description']; ?></textarea>
                </td>
            </tr>
            <tr id="featuredImg" class="featuredImg">
                <td width="20%">新闻特色图片<span id="required" class="required">*</span></td>
                <td>
                    <input type="hidden" value="<?php echo $newsinfo['img_id']; ?>" id="img_id" name="img_id"/>
                    <input type="hidden" id="imgLength" name="imgLength"/>
                    <input type="hidden" id="imgs" name="imgs"/>
                    <input type="file" name="img" id="img"><br/>
                    <div id="imgPreviewBox" class="imgPreviewBox">
                        <?php if(is_array($news_images) || $news_images instanceof \think\Collection): $i = 0; $__LIST__ = $news_images;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$img): $mod = ($i % 2 );++$i;?>
                        <div style="display: inline-block; margin-right: 10px;border: 1px solid #ccc;position: relative;">
                            <img id="delImg" data-imgid="<?php echo $img['img_id']; ?>"
                                 src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDY3IDc5LjE1Nzc0NywgMjAxNS8wMy8zMC0yMzo0MDo0MiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QTY3RkVEMDMyQjkyMTFFNkJBMEJBMjA3REQwMzM4MTMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6QTY3RkVEMDQyQjkyMTFFNkJBMEJBMjA3REQwMzM4MTMiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpBNjdGRUQwMTJCOTIxMUU2QkEwQkEyMDdERDAzMzgxMyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpBNjdGRUQwMjJCOTIxMUU2QkEwQkEyMDdERDAzMzgxMyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PlPFzqgAAAH2SURBVHjanJXdSgJBFMfX1ZKCIvpYP7IuutEy8AFCUSiwpyjqAeoBeooeoOwVCvSiGxGK6EqEaCUwL8SP3YooCxJ0O/84xjaOVh74wex/Z//MzDlz1qHIw0mEmAVigmgTL0SN0Jm2+KFDYrZMbBDTyuB4Is6JW3El3VCJdWKTGFN+D8xZJUaIMmGJhjBbU/4fi4SLKNkNV3hlwwZMDcJU2TQpzlBVVfF4PKOiDg3vJAEPJ96EiUnRLJ1OJ/P5/G4wGBzv6hhDy2QySYkpPMIuLo0f4ff73ZFIZMnr9c5ls9mteDx+Ah1j0jRUB+ZUKpUP4dMQymafmBJNsRoy2IapYRgP0DRNm63X62YikTjRdf1Nsu1nGB5wlhSZaS6X2yGjGTybpvkQi8VSfcwQbVVW7UJY3wPLAtagyTBs9lsdzgzbxMpo248Y4xjsiRLiFYYNUQ0EAu5uAnBm0Wj0mLZ6hDEnahtzJIZVlS/5T7Va/SgUCvcwoAynisXiO8AYGr0rYY7EUHdwYe/JahFFXKvVWnbd5/ONNhqNVqfTEc3QiQ6dfOgvXOCKPQHNZrMnYdD65OUUx9e9yyZ3jcUh7/IFcSV2mzK3pPl/ml1zX+xpXxDuuGv4/tAT0WDPiEt7rToG/ALCfM/9/Av4qjMUAVfGjexSfAowAAv/xKb6nWIFAAAAAElFTkSuQmCC"
                                 style="position:absolute; right: -10px; top: -10px;"/>
                            <img src="<?php echo $img['img_thumbUrl']; ?>" id="<?php echo $img['img_id']; ?>" style="height: 100px; width:auto;"/>
                        </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </td>
            </tr>
            <!--<tr>-->
                <!--<td>图片</td>-->
                <!--<td>-->

                    <!--<span class="btn btn-success fileinput-button">-->
                        <!--<i class="glyphicon glyphicon-plus"></i>-->
                        <!--<span>添加图片...</span>-->
                        <!--&lt;!&ndash; The file input field used as target for the file upload widget &ndash;&gt;-->
                        <!--<input id="fileupload" type="file" name="files[]" multiple>-->
                    <!--</span>-->

                    <!--&lt;!&ndash; The global progress bar &ndash;&gt;-->
                    <!--<div id="progress" class="progress">-->
                        <!--<div class="progress-bar progress-bar-success"></div>-->
                    <!--</div>-->
                    <!--&lt;!&ndash; The container for the uploaded files &ndash;&gt;-->
                    <!--<div id="files" class="files" style="display: flex; flex-direction: row;"></div>-->

                <!--</td>-->
            <!--</tr>-->
            <tr>
                <td width="20%">新闻内容</td>
                <td>
                    <script id="editor" type="text/plain" style="width:100%;height:300px;"><?php echo $newsinfo['news_content']; ?>

                    </script>
                </td>
            </tr>
        </table>
        <div style="text-align: center;margin-top: 20px;">
            <input type="submit" value="保存"/>
            <p id="errorMsg" class="errorMsg"></p>
        </div>
    </form>
</div>
<!-- /page content -->


<script>
    $('#addnewsform .input-group.date').datepicker({});


    //上传图片插件配置开始
//    var url = '/admin/News/saveImage',
//            uploadButton = $('<button/>')
//                    .addClass('btn btn-primary')
//                    .prop('disabled', true)
//                    .text('Processing...')
//                    .on('click', function (e) {
//                        var $this = $(this),
//                                data = $this.data();
//                        $this
//                                .off('click')
//                                .text('Abort')
//                                .on('click', function () {
//                                    $this.remove();
//                                    data.abort();
//                                });
//                        data.submit().always(function () {
//                            return false;
//                            $this.remove();
//                        });
//                    });
//

//    $('#fileupload').fileupload({
//        url: url,
//        dataType: 'json',
//        autoUpload: false,
//        acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
//        maxFileSize: 999000,
//        // Enable image resizing, except for Android and Opera,
//        // which actually support image resizing, but fail to
//        // send Blob objects via XHR requests:
//        disableImageResize: /Android(?!.*Chrome)|Opera/
//                .test(window.navigator.userAgent),
//        previewMaxWidth: 100,
//        previewMaxHeight: 100,
//        previewCrop: true
//    }).on('fileuploadadd', function (e, data) {
//        data.context = $('<div style="margin-right: 10px; " />').appendTo('#files');
//        $.each(data.files, function (index, file) {
//            var node = $('<p/>');
////                    .append($('<span/>').text(file.name));
//            if (!index) {
//                node
//                        .append(uploadButton.clone(true).data(data));
//            }
//            node.appendTo(data.context);
//        });
//    }).on('fileuploadprocessalways', function (e, data) {
//        var index = data.index,
//                file = data.files[index],
//                node = $(data.context.children()[index]);
//        if (file.preview) {
//            node
//                    .prepend('<br>')
//                    .prepend(file.preview);
//        }
//        if (file.error) {
//            node
//                    .append('<br>')
//                    .append($('<span class="text-danger"/>').text(file.error));
//        }
//        if (index + 1 === data.files.length) {
//            data.context.find('button')
//                    .text('Upload')
//                    .prop('disabled', !!data.files.error);
//        }
//    }).on('fileuploadprogressall', function (e, data) {
//        var progress = parseInt(data.loaded / data.total * 100, 10);
//        $('#progress .progress-bar').css(
//                'width',
//                progress + '%'
//        );
//    }).on('fileuploaddone', function (e, data) {
//        $.each(data.result.files, function (index, file) {
//            if (file.url) {
//                var link = $('<a>')
//                        .attr('target', '_blank')
//                        .prop('href', file.url);
//                $(data.context.children()[index])
//                        .wrap(link);
//            } else if (file.error) {
//                var error = $('<span class="text-danger"/>').text(file.error);
//                $(data.context.children()[index])
//                        .append('<br>')
//                        .append(error);
//            }
//        });
//    }).on('fileuploadfail', function (e, data) {
//        $.each(data.files, function (index) {
//            var error = $('<span class="text-danger"/>').text('File upload failed.');
//            $(data.context.children()[index])
//                    .append('<br>')
//                    .append(error);
//        });
//    }).prop('disabled', !$.support.fileInput)
//            .parent().addClass($.support.fileInput ? undefined : 'disabled');
    //上传图片插件配置结束


    //清空元素值
    function clearElement(id) {
        var up = (typeof id == "string") ? document.getElementById(id) : id;
        if (typeof up != "object") return null;
        var tt = document.createElement("span");
        tt.id = "__tt__";
        up.parentNode.insertBefore(tt, up);
        var tf = document.createElement("form");
        tf.appendChild(up);
        document.getElementsByTagName("body")[0].appendChild(tf);
        tf.reset();
        tt.parentNode.insertBefore(up, tt);
        tt.parentNode.removeChild(tt);
        tt = null;
        tf.parentNode.removeChild(tf);
    }

    //添加预览图片
    function readAndPreview(file) {
        // Make sure `file.name` matches our extensions criteria
        if (/\.(jpe?g|png|gif)$/i.test(file.name)) {
            var reader = new FileReader();
            reader.addEventListener("load", function () {
                var image = new Image();
                image.height = 100;
                image.src = this.result;
                $("#imgPreviewBox").append('<div style="display: inline-block; margin-right: 10px;border: 1px solid #ccc;position: relative;"><img id="delImg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDY3IDc5LjE1Nzc0NywgMjAxNS8wMy8zMC0yMzo0MDo0MiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QTY3RkVEMDMyQjkyMTFFNkJBMEJBMjA3REQwMzM4MTMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6QTY3RkVEMDQyQjkyMTFFNkJBMEJBMjA3REQwMzM4MTMiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpBNjdGRUQwMTJCOTIxMUU2QkEwQkEyMDdERDAzMzgxMyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpBNjdGRUQwMjJCOTIxMUU2QkEwQkEyMDdERDAzMzgxMyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PlPFzqgAAAH2SURBVHjanJXdSgJBFMfX1ZKCIvpYP7IuutEy8AFCUSiwpyjqAeoBeooeoOwVCvSiGxGK6EqEaCUwL8SP3YooCxJ0O/84xjaOVh74wex/Z//MzDlz1qHIw0mEmAVigmgTL0SN0Jm2+KFDYrZMbBDTyuB4Is6JW3El3VCJdWKTGFN+D8xZJUaIMmGJhjBbU/4fi4SLKNkNV3hlwwZMDcJU2TQpzlBVVfF4PKOiDg3vJAEPJ96EiUnRLJ1OJ/P5/G4wGBzv6hhDy2QySYkpPMIuLo0f4ff73ZFIZMnr9c5ls9mteDx+Ah1j0jRUB+ZUKpUP4dMQymafmBJNsRoy2IapYRgP0DRNm63X62YikTjRdf1Nsu1nGB5wlhSZaS6X2yGjGTybpvkQi8VSfcwQbVVW7UJY3wPLAtagyTBs9lsdzgzbxMpo248Y4xjsiRLiFYYNUQ0EAu5uAnBm0Wj0mLZ6hDEnahtzJIZVlS/5T7Va/SgUCvcwoAynisXiO8AYGr0rYY7EUHdwYe/JahFFXKvVWnbd5/ONNhqNVqfTEc3QiQ6dfOgvXOCKPQHNZrMnYdD65OUUx9e9yyZ3jcUh7/IFcSV2mzK3pPl/ml1zX+xpXxDuuGv4/tAT0WDPiEt7rToG/ALCfM/9/Av4qjMUAVfGjexSfAowAAv/xKb6nWIFAAAAAElFTkSuQmCC" style="position:absolute; right: -10px; top: -10px;" /><img src="' + this.result + '" style="height: 100px; width:auto;" /></div>');
            }, false);
            reader.readAsDataURL(file);
        }
    }

    var imgs = [];
    var tempimgs = [];
    var currentLength;


    //    for (var m = 0; m < $("#imgPreviewBox").children('div').length; m++) {
    //        imgs.push($("#imgPreviewBox").children('div')[m]);
    //    }

    //上传图片预览
    $("#img").change(function () {
//        clearElement('img');

//        if($("#img_id").val()){
//            currentLength = $("#img_id").val().split(',').length;
//
//        }else{
//            currentLength = 0;
//        }

        console.log($("#img_id").val());

        if ($("#img_id").val()) {
            currentLength = parseInt($("#img_id").val().split(',').length);
        } else {
            currentLength = 0;
        }

        console.log(currentLength);

        if (currentLength + imgs.length > 2) {
            alert("上传特色图片不能超过3张11111111");
        } else {
            imgs.push(this.files[0]);
            currentLength++;
            $("#imgs").val(imgs);
            readAndPreview(imgs[imgs.length - 1]);
        }

//
//        if (imgs.length + this.files.length > 3) {
//            alert("上传特色图片不能超过3张1111");
//        } else {
//            for (var i = 0; i < this.files.length; i++) {
//                imgs.push(this.files[i]);
//            }
//
//            $("#imgs").val(imgs);
//
//            for (var l = 0; l < this.files.length; l++) {
//                readAndPreview(this.files[l]);
//            }
//        $("#imgPreviewBox").html('');
//        [].forEach.call(imgs, readAndPreview);
//                readAndPreview(this.files[0]);
//        }

    });

    $(document).on("click", "#delImg", function () {
        var delImgId = $(this).data("imgid");
        var currentImgsStr = $("#img_id").val();
        var currentImgsArr = currentImgsStr.split(',');
        var index = $(this).parent().index();

        for (var x = 0; x < currentImgsArr.length; x++) {
            if (currentImgsArr[x] == delImgId) {
                currentImgsArr.splice(x, 1);
            }
        }

        $("#imgLength").val(currentImgsArr.length);


        if (currentImgsArr.length) {
            $("#img_id").val(currentImgsArr.join(','));
        } else {
            $("#img_id").val(null);
        }

        $(this).parent().remove();
        imgs.splice(index, 1);
    });

    //根据文章(显示)类型来确定图片上传是否为必选项
    $('#news_type').change(function () {
        console.log(this.value);
        $("#imgPreviewBox").html('');
        $("#img_id").val('');
        switch (this.value) {
            case "0":
                $("#featuredImg").css('display', 'none');
                break;
            case "1":
                $("#featuredImg").css('display', 'none');
                break;
            case "2":
                $("#featuredImg").css('display', 'table-row');
                break;
            case "3":
                $("#featuredImg").css('display', 'table-row');
//        $("#img").attr("name", "img[]");
                break;
            default:
                break;
        }
    });

    function checkForm() {
        var errorMsg = '';
        if (!$("#news_title").val()) {
            errorMsg += "新闻标题不能为空\n";
        }

        switch ($('#news_type').val()) {
            case "2":
//        if($("#img").get(0).files.length != 1){
                if (imgs.length != 1) {
                    errorMsg += "图片必须为1张\n";
                }
                break;
            case "3":
//        if($("#img").get(0).files.length != 3) {

                if ($("#img_id").val()) {
                    var t = parseInt($("#img_id").val().split(',').length);
                } else {
                    t = 0;
                }

                if (imgs.length + t != 3) {
                    errorMsg += "图片必须为3张\n";
                }
                break;
            default:
                break;
        }
        if (!UE.getEditor('editor').hasContents()) {
            errorMsg += "内容不能为空\n";
        }

        if (errorMsg) {
            $("#errorMsg").text(errorMsg);
            $("#errorMsg").css('display', 'block');
            return false;
        }
    }

</script>

<script type="text/javascript">
    //实例化编辑器
    var ue = UE.getEditor('editor');
</script>



<!-- footer content -->
<footer>
    <div class="pull-right">
        后台管理模板<a href="https://colorlib.com">主页</a>
    </div>
    <div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>
<script src="/static/lib/admin/js/custom.min.js"></script>
</body>
</html>