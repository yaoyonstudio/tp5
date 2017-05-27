<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"D:\xampp\htdocs\tp5\public/../application/admin\view\news\addnews.html";i:1479196565;s:49:"../application/admin/view/public/adminHeader.html";i:1495869518;s:49:"../application/admin/view/public/adminFooter.html";i:1479798781;}*/ ?>
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
                            <li><a><i class="fa fa-desktop"></i> 滑动图管理 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="/admin/Slides/index">滑动图管理</a></li>
                                    <li><a href="/admin/Slides/addSlide">添加滑动图</a></li>
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
    <form id="addnewsform" method="post" action="/admin/news/createnews" enctype="multipart/form-data" onsubmit="return checkForm()">
      <table class="table table-hover mytable">
        <tr>
          <td width="20%">新闻标题</td>
          <td><input type="text" id="news_title" name="news_title" placeholder="新闻标题" /></td>
        </tr>
        <tr>
          <td width="20%">新闻关键词</td>
          <td><input type="text" name="news_keywords" placeholder="新闻关键词" /></td>
        </tr>
        <tr>
          <td width="20%">新闻来源</td>
          <td><input type="text" name="news_souce" placeholder="新闻来源" /></td>
        </tr>
        <tr>
          <td width="20%">新闻来源链接</td>
          <td><input type="text" name="news_soucelink" placeholder="新闻来源链接" /></td>
        </tr>
        <tr>
          <td width="20%">新闻发布时间</td>
          <td>
            <div class="input-group date">
              <input type="text" class="form-control" name="news_publish_time"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
            </div>
          </td>
        </tr>
        <tr>
          <td width="20%">新闻是否发布</td>
          <td>
            <label class="radio-inline">
              <input type="radio" name="news_isopen" id="inlineRadio1" value="1" checked> 是
            </label>
            <label class="radio-inline">
              <input type="radio" name="news_isopen" id="inlineRadio2" value="0"> 否
            </label>
          </td>
        </tr>
        <tr>
          <td width="20%">新闻是否推荐</td>
          <td>
            <label class="radio-inline">
              <input type="radio" name="news_isrecommend" id="inlineRadio1" value="1"> 是
            </label>
            <label class="radio-inline">
              <input type="radio" name="news_isrecommend" id="inlineRadio2" value="0" checked> 否
            </label>
          </td>
        </tr>
        <tr>
          <td width="20%">新闻分类</td>
          <td>
            <select class="form-control" name="cat_id">
              <?php if(is_array($news_categories) || $news_categories instanceof \think\Collection): $i = 0; $__LIST__ = $news_categories;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
              <option value="<?php echo $cate['cat_id']; ?>"><?php echo $cate['cat_name']; ?></option>
              <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
          </td>
        </tr>
        <tr>
          <td width="20%">新闻类型</td>
          <td>
            <select class="form-control" name="news_type" id="news_type">
              <option value="0">自动</option>
              <option value="1">无图</option>
              <option value="2">单图</option>
              <option value="3">多图</option>
            </select>
          </td>
        </tr>
        <tr>
          <td width="20%">新闻描述</td>
          <td>
            <textarea class="form-control" rows="3" name="news_description"></textarea>
          </td>
        </tr>
        <tr id="featuredImg" class="featuredImg">
          <td width="20%">新闻特色图片<span id="required" class="required">*</span></td>
          <td>
            <input type="file" multiple name="img" id="img" ><br />
            <div id="imgPreviewBox" class="imgPreviewBox"></div>
          </td>
        </tr>
        <tr>
          <td width="20%">新闻内容</td>
          <td>
            <script id="editor" type="text/plain" style="width:100%;height:300px;"></script>
          </td>
        </tr>
      </table>
      <div style="text-align: center;margin-top: 20px;">
        <input type="submit" value="发布" />
        <p id="errorMsg" class="errorMsg"></p>
      </div>
    </form>
</div>
<!-- /page content -->


<script src="/static/js/bootstrap-datepicker.min.js"></script>
<script src="/static/js/bootstrap-datepicker.zh-CN.min.js"></script>
<script type="text/javascript" charset="utf-8" src="/static/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/static/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/static/ueditor/lang/zh-cn/zh-cn.js"></script>


<script>
  $('#addnewsform .input-group.date').datepicker({
  });

  //清空元素值
  function clearElement(id){
    var up = (typeof id=="string")?document.getElementById(id):id;
    if (typeof up != "object") return null;
    var tt = document.createElement("span");
    tt.id = "__tt__";
    up.parentNode.insertBefore(tt,up);
    var tf = document.createElement("form");
    tf.appendChild(up);
    document.getElementsByTagName("body")[0].appendChild(tf);
    tf.reset();
    tt.parentNode.insertBefore(up,tt);
    tt.parentNode.removeChild(tt);
    tt = null;
    tf.parentNode.removeChild(tf);
  }

  //上传图片预览
  $("#img").change(function () {
    var imgs = [];
    for(var i=0; i<this.files.length; i++){
      imgs.push(this.files[i]);
    }
    if(imgs.length > 3){
      $("#imgPreviewBox").html("<p class='error'>上传特色图片不能超过3张!</p>");
      clearElement('img');
      imgs.length = 0;
    }else{
      $("#imgPreviewBox").html("");
      function readAndPreview(file) {
        // Make sure `file.name` matches our extensions criteria
        if ( /\.(jpe?g|png|gif)$/i.test(file.name) ) {
          var reader = new FileReader();
          reader.addEventListener("load", function () {
            var image = new Image();
            image.height = 100;
            image.title = file.name;
            image.src = this.result;
            $("#imgPreviewBox").append( image );
          }, false);

          reader.readAsDataURL(file);
        }
      }
      if(this.files){
        [].forEach.call(this.files, readAndPreview);
      }
    }
  });

  //根据文章(显示)类型来确定图片上传是否为必选项
  $('#news_type').change(function () {
    console.log(this.value);
    switch (this.value){
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
        $("#img").attr("name", "img[]");
        break;
      default:
        break;
    }
  });

  function checkForm(){
    var errorMsg = '';
    if(!$("#news_title").val()){
      errorMsg += "新闻标题不能为空\n";
    }

    switch ($('#news_type').val()){
      case "2":
        if($("#img").get(0).files.length != 1){
          errorMsg += "图片必须为1张\n";
        }
        break;
      case "3":
        if($("#img").get(0).files.length != 3) {
          errorMsg += "图片必须为3张\n";
        }
        break;
      default:
        break;
    }
    if(!UE.getEditor('editor').hasContents()){
      errorMsg += "内容不能为空\n";
    }

    if(errorMsg){
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