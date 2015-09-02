<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>发表题目</title>
    <link href="<?php echo base_url("data/styles/bootstrap.min.css") ?>" rel="stylesheet"/>
    <link rel="stylesheet" href="<?php echo base_url("data/styles/font-awesome.min.css") ?>"/>
    <link rel="stylesheet" href="<?php echo base_url("data/styles/ace.css") ?>"/>
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
    <div class="sidebar responsive" id="sidebar">
        <ul class="nav nav-list">
            <li>
                <a href="<?php echo site_url('teacher/home') ?>">
                    <i class="menu-icon fa fa-home"></i>
                    <span class="menu-text"> 首页 </span>
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('teacher/pubTest') ?>" class="dropdown-toggle">
                    <i class="menu-icon fa fa-star"></i>
                    <span class="menu-text"> 发布试卷 </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>
            </li>
        </ul>
    </div>
    <div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home home-icon"></i>
                        <a>内容管理</a>
                    </li>
                    <li class="active">发表题目</li>
                </ul>
                <!-- .breadcrumb -->
            </div>
            <div class="page-content">
                <div class="row">
                    <div class="col-xs-12">
                        <form name="addcontent" action="<?php echo site_url("teacher/doPubQue") ?>" method="post"
                              enctype="multipart/form-data"
                              onsubmit="return checkSubmit();">
                            <input type="hidden" name="test_id" value="<?php echo $test_id ?>"/>

                            <div class="form-group">
                                <label>题目：</label>
                                <input name="que_topic" type="text" id="title"
                                       class='form-control-width-title form-control'
                                       maxlength="200" onfocus="inputAutoClear(this)"/>
                            </div>
                            <div class="form-group">
                                <label>答案A：</label>
                                <input name="ans_a" type="text" id="title" class='form-control-width-title form-control'
                                       maxlength="200" onfocus="inputAutoClear(this)"/>
                            </div>
                            <div class="form-group">
                                <label>答案B：</label>
                                <input name="ans_b" type="text" id="title" class='form-control-width-title form-control'
                                       maxlength="200" onfocus="inputAutoClear(this)"/>
                            </div>
                            <div class="form-group">
                                <label>答案C：</label>
                                <input name="ans_c" type="text" id="title" class='form-control-width-title form-control'
                                       maxlength="200" onfocus="inputAutoClear(this)"/>
                            </div>
                            <div class="form-group">
                                <label>答案D：</label>
                                <input name="ans_d" type="text" id="title" class='form-control-width-title form-control'
                                       maxlength="200" onfocus="inputAutoClear(this)"/>
                            </div>
                            <div class="form-group">
                                <label>正确答案(请填A,B,C或D)：</label>
                                <input name="ans_right" type="text" id="title"
                                       class='form-control-width-title form-control'
                                       maxlength="200" onfocus="inputAutoClear(this)"/>
                            </div>
                            <div class="form-group">
                                <label>音频文件：</label>
                                <input name="path" type="file" id="title""/>
                            </div>
                            <div class="form-group">
                                <button id="btnSignCheck" style="color:#fff" class="btn btn-primary btn-block btn-lg"
                                        type="submit">提交
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
                <!-- /.row -->
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
