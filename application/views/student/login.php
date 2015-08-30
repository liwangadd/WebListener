<html>
<head>
    <title>学生登录</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<body>
<form action="<?php echo site_url('student/doLogin')?>" method="post">
    学号:<input type="text" name="stu_num"><br>
    密码:<input type="password" name="password"><br>
    <input type="submit" value="登录">
</form>
</body>
</body>
</html>