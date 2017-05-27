<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:72:"D:\xampp\htdocs\tp5\public/../application/admin\view\newscate\index.html";i:1495852785;s:49:"../application/admin/view/public/adminHeader.html";i:1495869518;s:49:"../application/admin/view/public/adminFooter.html";i:1479798781;}*/ ?>
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
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <a class="<?php echo !empty($type) && $type=='1'?'active' : ''; ?>" href="/admin/NewsCate/index?type=1">分类</a>
        <a class="<?php echo !empty($type) && $type=='2'?'active' : ''; ?>" href="/admin/NewsCate/index?type=2">标签</a>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <table id="newslist-table" class="cateTable" cellspacing="0" cellpadding="0" width="100%">
          <thead>
            <tr>
              <th>类别ID</th>
              <th>类别名</th>
              <th>所在组</th>
              <th>类型</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
            <?php if(is_array($newsCategories) || $newsCategories instanceof \think\Collection): $i = 0; $__LIST__ = $newsCategories;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
              <tr>
                <td class="subContainer" colspan="5">
                  <table cellspacing="0" cellpadding="0" width="100%">
                    <thead>
                      <tr>
                        <th><span><?php echo $cate['cat_id']; ?></span></th>
                        <th><?php echo $cate['cat_name']; ?></th>
                        <th><?php echo $cate['parent_id']; ?></th>
                        <th>
                          <?php switch($cate['type']): case "1": ?>分类<?php break; case "2": ?>标签<?php break; endswitch; ?>
                        </th>
                        <th><button>编辑</button>  <button>删除</button></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if(is_array($cate['sub']) || $cate['sub'] instanceof \think\Collection): $i = 0; $__LIST__ = $cate['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?>
                      <tr class="sub">
                        <td><span>|— <?php echo $sub['cat_id']; ?></span></td>
                        <td><span>|— </span> <?php echo $sub['cat_name']; ?></td>
                        <td></td>
                        <td></td>
                        <td><button>编辑</button>  <button>删除</button></td>
                      </tr>
                      <?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                  </table>
                </td>
              </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->

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