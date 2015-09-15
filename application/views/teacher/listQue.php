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
    <div class="main-content" style="padding-left: 50px">
        <?php for ($i = 0;
        $i < count($result);
        $i++){
        ?>
        <div class="main-content-inner">
            <?php $sum = $result[$i]->right_count + $result[$i]->wrong_count;
            $sum = $sum == 0 ? 1 : $sum ?>
            <div style="width:50%; height:auto; float:left; display:inline">
                <p class="MsoNormal">
                    <span>1. </span><strong><span><?php echo $result[$i]->que_topic ?></span></strong>&nbsp;<span><?php echo $result[$i]->ans_right ?></span>
                </p>

                <p class="MsoNormal">
                    <span>A. </span><span><?php echo $result[$i]->ans_a ?></span>&nbsp;&nbsp;<span><?php echo (int)($result[$i]->stu_a / $sum * 100) . '%' ?></span>
                </p>

                <p class="MsoNormal"><span style="color: red;">B. </span><span><?php echo $result[$i]->ans_b ?>&nbsp;&nbsp</span><?php echo (int)($result[$i]->stu_b / $sum * 100) . '%' ?>
                    <span> </span></p>

                <p class="MsoNormal"><span>C. </span><span><?php echo $result[$i]->ans_c ?>
                        &nbsp;&nbsp</span><?php echo (int)($result[$i]->stu_c / $sum * 100) . '%' ?><span> </span></p>

                <p class="MsoNormal">
                    <span>D. </span><span><?php echo $result[$i]->ans_d ?></span>&nbsp;&nbsp<span><?php echo (int)($result[$i]->stu_d / $sum * 100) . '%' ?></span>
                </p>
            </div>
            <?php if (++$i < count($result)) {
                $sum = $result[$i]->right_count + $result[$i]->wrong_count;
                $sum = $sum == 0 ? 1 : $sum ?>
                <div style="width:50%; height:auto; float:left; display:inline">
                    <p class="MsoNormal">
                        <span>1. </span><strong><span><?php echo $result[$i]->que_topic ?></span></strong>&nbsp;<span><?php echo $result[$i]->ans_right ?></span>
                    </p>

                    <p class="MsoNormal">
                        <span>A. </span><span><?php echo $result[$i]->ans_a ?></span>&nbsp;&nbsp;<span><?php echo (int)($result[$i]->stu_a / $sum * 100) . '%' ?></span>
                    </p>

                    <p class="MsoNormal"><span style="color: red;">B. </span><span><?php echo $result[$i]->ans_b ?>
                            &nbsp;&nbsp</span><?php echo (int)($result[$i]->stu_b / $sum * 100) . '%' ?>
                        <span> </span></p>

                    <p class="MsoNormal"><span>C. </span><span><?php echo $result[$i]->ans_c ?>
                            &nbsp;&nbsp</span><?php echo (int)($result[$i]->stu_c / $sum * 100) . '%' ?><span> </span>
                    </p>

                    <p class="MsoNormal">
                        <span>D. </span><span><?php echo $result[$i]->ans_d ?></span>&nbsp;&nbsp<span><?php echo (int)($result[$i]->stu_d / $sum * 100) . '%' ?></span>
                    </p>
                </div>
            <?php
            }
            } ?>
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