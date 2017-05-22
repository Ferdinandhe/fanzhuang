<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>关于我们</title>
    <link rel="stylesheet" type="text/css" href="css/common.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<div class="clearfix nav">
    <a class="logo" href="javascript:;"></a>
    <ul class="clearfix nav-wrap">
        <li><a class="nav-item" href="<?php echo Url::toRoute('index/index')?>">首页</a></li>
        <li><a class="nav-item" href="<?php echo Url::toRoute('index/shop')?>">美食系列</a></li>
        <li><a class="nav-item" href="<?php echo Url::toRoute('index/rooms')?>">店面展示</a></li>
        <li><a class="nav-item nav-active" href="<?php echo Url::toRoute('index/we')?>">关于我们</a></li>
    </ul>
</div>

<div id="container">
    <div id="buttons">
        <span index="1" class="on"></span>
        <span index="2"></span>
        <span index="3"></span>
    </div>
    <a href="javascript:;" id="prev" class="arrow"><img src="img/l.png"/></a>
    <a href="javascript:;" id="next" class="arrow"><img src="img/r.png"/></a>
</div>
<div>
    <p>华通饭庄位于宁晋县大曹庄管理区盐厂前村西</p>
</div>
<ul class="breadnav clearfix">
    <li class="bnav-item"><a href="index.html">首页</a></li>
    <li class="bnav-item">&lt;</li>
    <li class="bnav-item"><a href="about-us.html">关于我们</a></li>
</ul>

<div>
    <p>                    华通饭庄位于宁晋县大曹庄管理区盐厂前村西</p>
</div>
<div class="foot">
    <div class="foot-wrap">
        <p class="foot-tit">友情链接</p>
        <ul class="foot-link clearfix">
            <li class="foot-pic">
                <a href="javascript:;"><img src="img/link6.png"/></a>
            </li>
            <li class="foot-pic">
                <a href="javascript:;"><img src="img/link5.png"/></a>
            </li>
            <li class="foot-pic">
                <a href="javascript:;"><img src="img/link4.png"/></a>
            </li>
            <li class="foot-pic">
                <a href="javascript:;"><img src="img/link3.png"/></a>
            </li>
            <li class="foot-pic">
                <a href="javascript:;"><img src="img/link2.png"/></a>
            </li>
            <li class="foot-pic">
                <a href="javascript:;"><img src="img/link1.png"/></a>
            </li>
        </ul>
        <div class="copyright">
            <p>CopyRight©2003-2015 www.91cy.cn All rigt rederved</p>
            <p>版权所有：贵族食代牛排有限公司  来源:<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
            <p>ICP备案号：京ICP备16047255号-3本站信息由会员自主添加，如信息涉及隐私等，网站不承担任何责任！</p>
        </div>
    </div>
</div>

</body>
<!--jq调用-->
<script src="js/jquery-1.11.0.js" type="text/javascript"></script>

<script type="text/javascript">
    //导航当前项切换
    $(".nav-item").click(function(){
        $(this).parent("li").siblings().children().removeClass("nav-active");
        //点击对象的父级（li）的兄弟级（li）的子集（a）移除类
        $(this).addClass("nav-active");
        //给点击对象添加类
    });
</script>
</html>
