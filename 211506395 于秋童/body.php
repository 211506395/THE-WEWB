<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>福州大学至诚学院问卷调查网</title>
    <style type="text/css">
        body{background-image:url(TU/bj01.jpg)}
        *{ margin:0 auto; padding:0;overflow:hidden;}
        .div0{ width:1300px;height:100px; position:absolute; top:0px;left:300px; bottom:0px;text-align:center;background-image: url(tu/03.jpg);
            background-size:1300px 200px;}
        .div1{ width:300px; height:250px; position:absolute; top:100px; left:300px; bottom:0px;background-color:#EEEEEE;text-align:center;}
        .div2{ width:700px; height:250px; position:absolute; top:100px; left:600px; bottom:0px;background-color:#E5F6FE;text-align:center;}
        .div3{ width:300px; height:250px; position:absolute; top:100px; left:1300px; bottom:0px; right:8500px;background-color:#EEEEEE;text-align:center;}
        .div4{ width:1300px;height:1500px; position:absolute; top:350px; left:300px; bottom:0px; background-color:#E9E6D3;}
        .table1 td{width:120px;height:120px;padding: 20px 0px 40px 100px;}
        .btn{width:100%;height:100%;background-color:#E9E6D3;}
    </style>
</head>

<body>

<?php
echo "<script>alert('同学欢迎回来')</script>";
?>

<div class="div0"><br>
    <h1><p>福州大学问卷调查网</p></h1>
    <h6><p>211506395 于秋童</p></h6>
</div>

<div class="div1">
    <from action="save.php" method="post">
        <br>
        <h3><p>请选择年级系别</p></h3><br>
        <p>年级
            <select name="年级"style="width:120px;height:30px">
                <option>2014</option><option>2015</option><option>2016</option><option>2017</option>
            </select>
        </p><br>
        <p>系别
            <select name="系别"style="width:120px;height:30px">
                <option>计算机工程</option><option>材料工程</option><option>机械工程</option><option>xxx</option>
            </select>
        </p><br>
        <p>
            <label><input type="radio"name="状态"value="实名"checked="checked"/>实名</label>
            <label><input type="radio"name="状态"value="匿名"/>匿名</label>
            <input type="submit" name="submit" value="确认保存" style="width:120px;height:30px">
        </p>
    </from>
</div>

<div class="div2">
    <marquee onMouseOut="this.start()" onMouseOver="this.stop()"><br>
        <h2><pre style="color: #FF0C00">
        关于开展福州大学至诚学院院级课程改革项目申报立项工作的通知
        </pre></h2>
    </marquee>
    <div style="text-align: left">
    <h4><pre>
        关于做好我院退伍大学生承训教官有关工作的通知  (2017-11-28)
        福州大学至诚学院关于开展第二批继续教育网络课程申报工作的通知  (2017-11-01)
        关于举办基于APP的移动教学方法培训会的通知  (2017-10-26)
        2016级《形势政策》选课通知  (2017-10-25)
        关于四六级口语考试辅导的通知  (2017-10-18)
        关于申报产学合作协同育人项目的通知  (2017-10-18)
        2017年11月全国大学英语四、六级口语考试报名通知  (2017-10-16)
        关于举办福建省高校第一届移动教学大赛的通知  (2017-10-12)
        福州大学至诚学院2016-2017学年第二学期重新修读费用返还的学生名单公示  (2017-10-11)
        关于2018年1月份全省高校计算机等级考试报名的通知  (2017-10-10)
        关于2017~2018学年第一学期院级选修课网络选课通知  (2017-09-28)
    </pre></h4>
    </div>
</div>

<div class="div3">
    <h3><p align="center">
        微信公众号:至诚教务助手<br/>
        微信号:zcxyjwb
    </p></h3>
    <img src="tu/erwei.jpg"height="150"width="150">
    <p>当前时间</p>
    <p id="time1" style="color:BLUE;"></p>
    <script>
        function mytime()
        {
            var a = new Date();
            var b = a.toLocaleTimeString();
            var c = a.toLocaleDateString();
            document.getElementById("time1").innerHTML = c+"&nbsp"+b;
        }
        setInterval(function() {mytime()},1000);
    </script>
</div>

<div class="div4">
    <h1><strong>      问卷调查</strong></h1>
    <table border="0"  align="center" style="margin:auto" class="table1">
        <tr>
            <td><input type="button"  style="background:url(tu/d11.png); background-size: cover;" class="btn"/>4/6级报考调查</td>
            <td><input type="button"  style="background:url(tu/d10.png); background-size: cover;" class="btn"/>食堂服务满意度</td>
            <td><input type="button"  style="background:url(tu/d03.png); background-size: cover;" class="btn"/>学院奖项调查</td>
            <td><input type="button"  style="background:url(tu/d04.png); background-size: cover;" class="btn"/>考试安排调查</td>
        </tr>
        <tr>
            <td><input type="button"  style="background:url(tu/d05.png); background-size: cover;" class="btn"/>图书馆借阅情况</td>
            <td><input type="button"  style="background:url(tu/d15.png); background-size: cover;" class="btn"/>学分收费调查</td>
            <td><input type="button"  style="background:url(tu/d16.png); background-size: cover;" class="btn"/>学院实验安排</td>
            <td><input type="button"   style='font-size:25px' value="更多" class="btn"/></td>
        </tr>
    </table>
</div>

</body>
</html>