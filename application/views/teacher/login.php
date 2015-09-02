<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <title>会员登录</title>
    <link href="<?php echo base_url("data/styles/login.css")?>" rel="stylesheet" type="text/css" />
    <script type="application/javascript">
        <?php if(isset($error)){?>
            alert("用户名或密码错误");
        <?php }?>
    </script>
</head>
<body>
<div class="container text-center ">
    <div class="header">
        <h1><a href="/" class="logo"><img width="181" src="<?php echo base_url("data/images/logo_green.png")?>"></a></h1>
        <p>每天积累一点点</p>
    </div>
</div>
<div class="container">
    <div id="login">
        <!--表单-->
        <div class="login-form">
            <form name='form1' method='POST' action='<?php echo site_url("teacher/doLogin")?>'>
                <div class="form-group">
                    <label class="required" for="">用户名</label>
                    <input id="txtUsername"  placeholder="用户名或者email" class="form-control" type="text" name="username"/>
                </div>
                <div class="form-group">
                    <label class="required" for="">密码</label>
                    <input id="txtPassword"  placeholder="密码" class="form-control" type="password" name="password"/>
                </div>
                <div class="form-group">
                    <button id="btnSignCheck"  style="color:#fff"  class="btn btn-primary btn-block btn-lg" type="submit">登录</button>
                    <a href="<?php echo site_url('teacher/reg')?>">还没有账号？注册</a>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
