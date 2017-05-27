<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:68:"D:\xampp\htdocs\tp5\public/../application/admin\view\news\index.html";i:1479795981;s:49:"../application/index/view/public/adminHeader.html";i:1479085480;s:49:"../application/index/view/public/adminFooter.html";i:1478766551;}*/ ?>
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
    <link rel="stylesheet" href="/static/css/bootstrap-datepicker3.standalone.min.css">
    <link rel="stylesheet" href="/static/css/admin.css">
    <script src="/static/js/jquery.min.js"></script>
    <script src="/static/js/bootstrap.js"></script>
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
                            <li><a><i class="fa fa-home"></i> 网站配置 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="index">Dashboard</a></li>
                                    <li><a href="newslist">Dashboard2</a></li>
                                    <li><a href="#">Dashboard3</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-desktop"></i> 图片管理 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="#">General Elements</a></li>
                                    <li><a href="#">Media Gallery</a></li>
                                    <li><a href="#">Typography</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-edit"></i> 资讯管理 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="/admin/news/newslist">资讯管理</a></li>
                                    <li><a href="#">新建资讯</a></li>
                                    <li><a href="#">资讯分类管理</a></li>
                                    <li><a href="#">新建资讯分类</a></li>
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
                                <img src="/static/img/img.jpg" alt="">John Doe
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
        <h2><?php echo $name; ?></h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <table id="newslist-table" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
          <thead>
          <tr>
            <th>新闻ID</th>
            <th>类别</th>
            <th>新闻标题</th>
            <th>新闻类型</th>
            <th>新闻来源</th>
            <th>编辑人</th>
            <th>操作</th>
          </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->

<script src="/static/lib/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/static/lib/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="/static/lib/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="/static/lib/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="/static/lib/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="/static/lib/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="/static/lib/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="/static/lib/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="/static/lib/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="/static/lib/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="/static/lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="/static/lib/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="/static/lib/datatables.net-scroller/js/dataTables.scroller.min.js"></script>

<script>
//  $('#newslist-table').DataTable();
$('#newslist-table').DataTable({
  fixedHeader: true,
  processing: true,
  serverSide: true,
  ajax: "/admin/news/getnewslist",
  columns: [
    {"data": "news_id"},
    {"data": "cat_name"},
    {"data": "news_title"},
    {"data": "news_type", "render": function(data, type, row, meta){
      switch (data){
        case 0:
          return '自动';
          break;
        case 1:
          return '无图';
          break;
        case 2:
          return '单图';
          break;
        case 3:
          return '多图';
          break;
        default:
          break;
      }
    }},
    {"data": "news_souce"},
    {"data": "user_name"},
    {"data": "news_id", "render": function(data, type, row, meta){
      return '<a href="/admin/News/newsedit/?id='+data+'">编辑</a>';
    }}
  ]
});
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

<script src="/static/lib/jquery/dist/jquery.min.js"></script>
<script src="/static/lib/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/static/lib/fastclick/lib/fastclick.js"></script>
<script src="/static/lib/nprogress/nprogress.js"></script>
<script src="/static/lib/admin/js/custom.min.js"></script>

</body>
</html>