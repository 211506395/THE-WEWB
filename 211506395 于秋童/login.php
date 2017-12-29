<?php
if(isset($_POST["submit"]) && $_POST["submit"] = "登陆")
{
    $user = $_POST["username"];
    $psw = $_POST["password"];
    if($user == "" || $psw == "")
    {
        echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";
    }
    else if($user == "于秋童" || $psw == "123456")
    {
        print "<script>alert('登录成功');parent.location.href='body.php';</script>";
    }
    else
    {
        echo "<script>alert('用户名或密码不正确！');history.go(-1);</script>";
    }
}
else
{
    echo "<script>alert('提交未成功！'); history.go(-1);</script>";
}
?>