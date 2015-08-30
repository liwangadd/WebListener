<html>
<head>
    <title>学生注册</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<form action="<?php echo site_url('student/doReg')?>" method="post">
    <input type="text" name="username"><br>
    <input type="password" name="password"><br>
    <input type="text" name="grade"><br>
    <input type="text" name="class"><br>
    <input type="text" name="real_name"><br>
    <input type="text" name="stu_num"><br>
    <input type="submit" value="注册"/>
</form>
</body>
</html>