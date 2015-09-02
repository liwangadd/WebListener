<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>试题管理</title>
    <link href="<?php echo base_url("data/styles/bootstrap.min.css") ?>" rel="stylesheet"/>
    <link rel="stylesheet" href="<?php echo base_url("data/styles/font-awesome.min.css") ?>"/>

    <link rel="stylesheet" href="<?php echo base_url("data/styles/ace.css") ?>"/>

    <script src="templets/ace/js/ace-extra.min.js"></script>

    <script type="text/javascript">
        function viewArc(aid) {
            window.open("/plus/view.php?aid=" + aid);
        }
        function editArc(aid, channelid) {
            location = "archives_do.php?dopost=edit&channelid=" + channelid + "&aid=" + aid;
        }
        function delArc(aid) {
            if (window.confirm('你确定要删除这篇文档吗?')) location = "archives_do.php?aid=" + aid + "&dopost=delArc";
        }
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            equalDivHeight("left", "right");
        });
    </script>
    <script type="text/javascript">

        function equalDivHeight(div1, div2) {
            var height = document.getElementById(div1).offsetHeight > document.getElementById(div2).offsetHeight ? document.getElementById(div1).offsetHeight : document.getElementById(div2).offsetHeight;
            document.getElementById(div1).style.height = document.getElementById(div2).style.height = height + "px";
        }
    </script>
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
                    <a href="<?php echo site_url("teacher/logout") ?>"">
                    <img class="nav-user-photo" src=""/>
                    退出帐号
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
                    <li class="active">查看试卷</li>
                </ul>
                <!-- .breadcrumb -->

                <div class="nav-search" id="nav-search">
                    <a class="btn-green-white" href="<?php echo site_url("teacher/pubTest") ?>">

                        <i class="menu-icon fa fa-pencil-square-o"></i>发表试卷
                    </a>
                </div>
                <!-- #nav-search -->
            </div>
            <div class="page-content">
                <div class="row">
                    <div class="col-xs-12">
                        <!--内容消息提示 -->
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="center" width="45%">标题</th>
                                <th class="center" width="13%">发布时间</th>
                                <th class="center" width="11%">操作</th>
                            </tr>
                            </thead>
                            <?php foreach ($result as $item) { ?>
                                <thead>
                                <tr>
                                    <th class="center" width="45%"><?php echo $item->test_topic ?></th>
                                    <th class="center" width="13%"><?php echo $item->pub_time ?></th>
                                    <th class="center" width="11%"><a
                                            href="<?php echo site_url('teacher/pubQue\/') . $item->test_id ?>">上传</a>
                                        <a href="<?php echo site_url('teacher/detailTest\/') . $item->test_id ?>">查看</a>
                                    </th>
                                </tr>
                                </thead>
                            <?php } ?>
                            <tbody>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="6">
                                    <div class="dataTables_paginate paging_bootstrap"><span><?php echo $link ?></span>
                                    </div>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
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
<!-- /.main-container -->


<script type="text/javascript">
    window.jQuery || document.write("<script src='<?php echo base_url("data/js/jquery-2.0.3.min.js")?>'>" + "<" + "script>");
</script>


<script type="text/javascript">
    if ("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "script>");
</script>
<script src="<?php echo base_url("data/js/bootstrap.min.js") ?>"></script>
<script type="text/javascript">
    jQuery(function ($) {
        $('.easy-pie-chart.percentage').each(function () {
            var $box = $(this).closest('.infobox');
            var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
            var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
            var size = parseInt($(this).data('size')) || 50;
            $(this).easyPieChart({
                barColor: barColor,
                trackColor: trackColor,
                scaleColor: false,
                lineCap: 'butt',
                lineWidth: parseInt(size / 10),
                animate: /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()) ? false : 1000,
                size: size
            });
        })

        $('.sparkline').each(function () {
            var $box = $(this).closest('.infobox');
            var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
            $(this).sparkline('html', {
                tagValuesAttribute: 'data-values',
                type: 'bar',
                barColor: barColor,
                chartRangeMin: $(this).data('min') || 0
            });
        });


        var placeholder = $('#piechart-placeholder').css({'width': '90%', 'min-height': '150px'});
        var data = [
            {label: "social networks", data: 38.7, color: "#68BC31"},
            {label: "search engines", data: 24.5, color: "#2091CF"},
            {label: "ad campaigns", data: 8.2, color: "#AF4E96"},
            {label: "direct traffic", data: 18.6, color: "#DA5430"},
            {label: "other", data: 10, color: "#FEE074"}
        ]

        function drawPieChart(placeholder, data, position) {
            $.plot(placeholder, data, {
                series: {
                    pie: {
                        show: true,
                        tilt: 0.8,
                        highlight: {
                            opacity: 0.25
                        },
                        stroke: {
                            color: '#fff',
                            width: 2
                        },
                        startAngle: 2
                    }
                },
                legend: {
                    show: true,
                    position: position || "ne",
                    labelBoxBorderColor: null,
                    margin: [-30, 15]
                },
                grid: {
                    hoverable: true,
                    clickable: true
                }
            })
        }

        drawPieChart(placeholder, data);

        /**
         we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
         so that's not needed actually.
         */
        placeholder.data('chart', data);
        placeholder.data('draw', drawPieChart);


        var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
        var previousPoint = null;

        placeholder.on('plothover', function (event, pos, item) {
            if (item) {
                if (previousPoint != item.seriesIndex) {
                    previousPoint = item.seriesIndex;
                    var tip = item.series['label'] + " : " + item.series['percent'] + '%';
                    $tooltip.show().children(0).text(tip);
                }
                $tooltip.css({top: pos.pageY + 10, left: pos.pageX + 10});
            } else {
                $tooltip.hide();
                previousPoint = null;
            }

        });


        var d1 = [];
        for (var i = 0; i < Math.PI * 2; i += 0.5) {
            d1.push([i, Math.sin(i)]);
        }

        var d2 = [];
        for (var i = 0; i < Math.PI * 2; i += 0.5) {
            d2.push([i, Math.cos(i)]);
        }

        var d3 = [];
        for (var i = 0; i < Math.PI * 2; i += 0.2) {
            d3.push([i, Math.tan(i)]);
        }


        var sales_charts = $('#sales-charts').css({'width': '100%', 'height': '220px'});
        $.plot("#sales-charts", [
            {label: "Domains", data: d1},
            {label: "Hosting", data: d2},
            {label: "Services", data: d3}
        ], {
            hoverable: true,
            shadowSize: 0,
            series: {
                lines: {show: true},
                points: {show: true}
            },
            xaxis: {
                tickLength: 0
            },
            yaxis: {
                ticks: 10,
                min: -2,
                max: 2,
                tickDecimals: 3
            },
            grid: {
                backgroundColor: {colors: ["#fff", "#fff"]},
                borderWidth: 1,
                borderColor: '#555'
            }
        });


        $('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
        function tooltip_placement(context, source) {
            var $source = $(source);
            var $parent = $source.closest('.tab-content')
            var off1 = $parent.offset();
            var w1 = $parent.width();

            var off2 = $source.offset();
            var w2 = $source.width();

            if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2)) return 'right';
            return 'left';
        }


        $('.dialogs,.comments').slimScroll({
            height: '300px'
        });


        //Android's default browser somehow is confused when tapping on label which will lead to dragging the task
        //so disable dragging when clicking on label
        var agent = navigator.userAgent.toLowerCase();
        if ("ontouchstart" in document && /applewebkit/.test(agent) && /android/.test(agent))
            $('#tasks').on('touchstart', function (e) {
                var li = $(e.target).closest('#tasks li');
                if (li.length == 0)return;
                var label = li.find('label.inline').get(0);
                if (label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation();
            });

        $('#tasks').sortable({
                opacity: 0.8,
                revert: true,
                forceHelperSize: true,
                placeholder: 'draggable-placeholder',
                forcePlaceholderSize: true,
                tolerance: 'pointer',
                stop: function (event, ui) {//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
                    $(ui.item).css('z-index', 'auto');
                }
            }
        );
        $('#tasks').disableSelection();
        $('#tasks input:checkbox').removeAttr('checked').on('click', function () {
            if (this.checked) $(this).closest('li').addClass('selected');
            else $(this).closest('li').removeClass('selected');
        });

    })
</script>
</body>
</html>