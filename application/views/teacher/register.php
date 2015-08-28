
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>注册</title>
    <link href="<?php echo base_url("data/styles/login.css")?>" rel="stylesheet" type="text/css" />
    <script src="<?php echo base_url("data/js/j.js")?>" language="javascript" type="text/javascript"></script>
    <script src="<?php echo base_url("data/js/base.js")?>" language="javascript" type="text/javascript"></script>
    <script src='<?php echo base_url("data/js/CheckPassStrength.js")?>' type="text/javascript" language="javascript"></script>
    <script type="text/javascript" language="javascript" src='<?php echo base_url("data/js/reg_new.js")?>'></script>
    <script type="text/javascript" language="javascript">
        <!--
        var reMethod = "GET",pwdmin = 3;

        function changeAuthCode() {
            var num = 	new Date().getTime();
            var rand = Math.round(Math.random() * 10000);
            num = num + rand;
            $('#ver_code').css('visibility','visible');
            if ($("#vdimgck")[0]) {
                $("#vdimgck")[0].src = "../include/vdimgck.php?tag=" + num;
            }
            return false;
        }

        function hideVc()
        {
            $('#ver_code').css('visibility','hidden');
        }


        $(document).ready(function(){
            $("#passwordLevel").removeClass().addClass("rank r0");
            $("#vdcode").focus(function(){
                var leftpos = $("#vdcode").position().left;
                var toppos = $("#vdcode").position().top - 42;
                $('#ver_code').css('left', leftpos+'px');
                $('#ver_code').css('top', toppos+'px');
                $('#ver_code').css('visibility','visible');
            });
            $("input[type='password']").click(function(){
                hideVc()
            });
            $("#txtUsername").click(function(){
                hideVc()
            });
            $("input[type='radio']").focus(function(){
                hideVc()
            });
            /*
             $("#vdcode").blur(function(){
             $('#ver_code').css('visibility','hidden');
             });
             */
        })

        -->
    </script>
</head>
<body>
<div class="container text-center ">
    <div class="header">
        <h1><a href="/" class="logo"><img width="181" src="<?php echo base_url("data/images/logo_green.png")?>"></a></h1>
        <p>在这里，开启我的日语生涯</p>
    </div>
</div>
<div class="container">
    <div id="login">
        <!--系统提示 保留-->
        <div class="stip1"></div>
        <!--表单-->
        <div class="login-form">
            <h1 class="h4 text-center login-title">注册新账号</h1>
            <form method="post" action="<?php echo site_url("teacher/doReg")?>" id="regUser" name="form2">
                <div class="form-group">
                    <label class="required" for="">用户名</label>
                    <input type="text" class="form-control" id="txtUsername" name="username"/>
                    <span id="_userid" ></span>
                </div>
                <div class="form-group">
                    <label class="required" for="">密码</label>
                    <input type="password" placeholder="密码不能少于3位" onkeyup="setPasswordLevel(this, document.getElementById('passwordLevel'));"  class="form-control" id="txtPassword" name="password"/>
                </div>
                <div class="form-group">
                    <label class="required" for="">确认</label>
                    <input type="password" class="form-control"  value="" id="userpwdok" name="userpwdok"/>
                    <span id="_userpwdok" ></span>
                </div>
                <div class="form-group">
                    <button type="submit" id="btnSignCheck" style="color:#fff" class="btn btn-primary btn-block btn-lg" >注册</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>