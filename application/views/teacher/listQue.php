<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>发表试卷</title>
    <link href="<?php echo base_url("data/styles/bootstrap.min.css") ?>" rel="stylesheet"/>
    <link rel="stylesheet" href="<?php echo base_url("data/styles/font-awesome.min.css") ?>"/>
    <link rel="stylesheet" href="<?php echo base_url("data/styles/ace.css") ?>"/>
    <script type="text/javascript" src="<?php echo base_url("data/js/checkSubmit.js") ?>"></script>
</head>
<body class="no-skin">
<div class="navbar navbar-default" id="navbar">
    <script type="text/javascript">
        try {
            ace.settings.check('navbar', 'fixed')
        } catch (e) {
        }
    </script>

    <div class="navbar-container container" id="navbar-container">
        <div class="navbar-header pull-left">
            <a href="/member" class="navbar-brand">
                <small>
                    <i class="menu-icon fa fa-cloud"></i>
                    教师系统
                </small>
            </a><!-- /.brand -->
        </div>
        <!-- /.navbar-header -->

        <div class="navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">
                <li>
                    <a href="<?php echo site_url("teacher/logout") ?>">
                        <img class="nav-user-photo" src=""/>
                        退出账号
                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>
                </li>
            </ul>
            <!-- /.ace-nav -->
        </div>
        <!-- /.navbar-header -->
        <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <span id="news"></span>
        </div>
    </div>
    <!-- /.container -->
</div>
<div class="main-container container" id="main-container">
    <script type="text/javascript">
        try {
            ace.settings.check('main-container', 'fixed')
        } catch (e) {
        }
    </script>
    <div class="sidebar responsive" id="sidebar">
        <script type="text/javascript">
            try {
                ace.settings.check('sidebar', 'fixed')
            } catch (e) {
            }
        </script>
        <ul class="nav nav-list">
            <li>
                <a href="<?php echo site_url('teacher/home') ?>">
                    <i class="menu-icon fa fa-home"></i>
                    <span class="menu-text"> 首页 </span>
                </a>
            </li>

            <li class="active open">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-windows"></i>
                    <span class="menu-text"> 内容管理 </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <ul class="submenu">
                    <li class="active">
                        <a href="/member/content_list.php?channelid=1">
                            <i class="icon-double-angle-right"></i>
                            我的文章
                        </a>
                    </li>

                    <li>
                        <a href="/ask/?ct=myask">
                            <i class="icon-double-angle-right"></i>
                            问答
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-star"></i>
                    <span class="menu-text"> 个人收藏 </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <ul class="submenu">
                    <li>
                        <a href="/member/mystow.php">
                            <i class="icon-double-angle-right"></i>
                            我的收藏
                        </a>
                    </li>

                    <li>
                        <a href="/member/flink_main.php">
                            <i class="icon-double-angle-right"></i>
                            书签
                        </a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="/member/pm.php">
                    <i class="icon-text-width"></i>
                    <i class="menu-icon fa fa-envelope"></i>
                    <span class="menu-text"> 个人消息 </span>
                </a>
            </li>

            <li>
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-weixin"></i>
                    <span class="menu-text"> 我的好友 </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <ul class="submenu">
                    <li>
                        <a href="/member/myfriend.php">
                            <i class="icon-double-angle-right"></i>
                            所有好友
                        </a>
                    </li>

                    <li>
                        <a href="/member/visit-history.php?dopost=viewme">
                            <i class="icon-double-angle-right"></i>
                            关注我的
                        </a>
                    </li>
                    <li>
                        <a href="/member/visit-history.php?dopost=meview">
                            <i class="icon-double-angle-right"></i>
                            我最近访问
                        </a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="/member/edit_space_info.php">
                    <i class="icon-text-width"></i>
                    <i class="menu-icon fa fa-th"></i>
                    <span class="menu-text"> 空间设置 </span>
                </a>
            </li>

            <li>
                <a href="/member/guestbook_admin.php">
                    <i class="menu-icon fa fa-reply"></i>
                    <span class="menu-text"> 留言板 </span>
                </a>
            </li>
        </ul>
        <!-- /.nav-list -->
        <div class="sidebar-collapse" id="sidebar-collapse">
            <i class="icon-double-angle-left" data-icon1="icon-double-angle-left"
               data-icon2="icon-double-angle-right"></i>
        </div>

        <script type="text/javascript">
            try {
                ace.settings.check('sidebar', 'collapsed')
            } catch (e) {
            }
        </script>
    </div>
    <div class="main-content">
        <div class="main-content-inner" style="padding-left: 50px">
            <div style="width:50%; height:auto; float:left; display:inline">
                <p class="MsoNormal"><span>1. </span><strong><span>在<span>Java</span>中，负责对字节代码解释执行的是 </span></strong>
                </p>

                <p class="MsoNormal"><span>A. </span><span>应用服务器</span><span> </span></p>

                <p class="MsoNormal"><span style="color: red;">B. </span><span>虚拟机</span><span
                        style="color: red;"> </span></p>

                <p class="MsoNormal"><span>C. </span><span>垃圾回收器</span><span> </span></p>

                <p class="MsoNormal"><span>D. </span><span>编译器</span></p>
            </div>

            <div style="width:50%; height:auto; float:left; display:inline">
                <p class="MsoNormal"><span>1. </span><strong><span>在<span>Java</span>中，负责对字节代码解释执行的是 </span></strong>
                </p>

                <p class="MsoNormal"><span>A. </span><span>应用服务器</span><span> </span></p>

                <p class="MsoNormal"><span style="color: red;">B. </span><span>虚拟机</span><span
                        style="color: red;"> </span>
                </p>

                <p class="MsoNormal"><span>C. </span><span>垃圾回收器</span><span> </span></p>

                <p class="MsoNormal"><span>D. </span><span>编译器</span></p>
            </div>
            <!-- /.page-content -->
        </div>
        <!-- /.main-content -->

    </div>
    <!-- /.main-container-inner -->

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="icon-double-angle-up icon-only bigger-110"></i>
    </a>
</div>
</body>
</html>