
<?php
use yii\helpers\Url;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <!-- 优先使用 IE 最新版本和 Chrome -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>首页</title>
    <link rel="stylesheet" type="text/css" href="/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/css/style.css"/>
</head>
<body>
<div class="clearfix nav">
    <a class="logo" href="/img/log.jpg:;"></a>
    <ul class="clearfix nav-wrap">
        <li><a class="nav-item nav-active" href="<?php echo Url::toRoute('index/index')?>">首页</a></li>
        <li><a class="nav-item" href="<?php echo Url::toRoute('index/shop')?>">美食系列</a></li>
        <li><a class="nav-item" href="<?php echo Url::toRoute('index/rooms')?>">店面展示</a></li>
        <li><a class="nav-item" href="<?php echo Url::toRoute('index/we')?>">关于我们</a></li>
    </ul>
</div>

<div id="container">
    <div id="buttons">
    </div>
</div>

<div class="new-wrap">
    <p class="newfood-tit">新品推荐</p>
    <div class="newfood-box clearfix" id="newfood-table">
        <ul class="newfood-wrap clearfix newfood-show">
            <?php foreach ($data as $key=>$val):?>
                <li class="newfood-item newfood-right newfood-li<?=$key+1?>">
                    <a href="meishi-con.html" class="newfood-p<?=$key+1?>"><?php echo $val['type']?></a>
                </li>
            <?php endforeach;?>
        </ul>
        <ul class="newfood-wrap clearfix">
            <?php foreach ($data as $val):?>
            <li class="newfood-item newfood-right newfood-li5">
                <a href="meishi-con.html" class="newfood-p5"><?php echo $val['type']?></a>
            </li>
            <?php endforeach;?>
        </ul>
        <ul class="newfood-wrap clearfix">
            <?php foreach ($data as $val):?>
            <li class="newfood-item newfood-right newfood-li3">
                <a href="meishi-con.html" class="newfood-p3"><?php echo $val['type']?></a>
            </li>
            <?php endforeach;?>
        </ul>
    </div>
    <div class="clearfix" id="newfood-span">
        <span style="background: url(img/icon-2.png);"></span>
        <span></span>
        <span></span>
    </div>
</div>
<div class="company-wrap">
    <p class="company-tit">饭庄简介</p>
    <dl class="clearfix company-dl">
        <dt class="company-dt">
            <img src="/img/pic1.png"/>
        </dt>
        <dd class="company-dd">
            <p>华通饭庄位于宁晋县大曹庄管理区南行2km处紧邻宁隆乡道交通便利</p>
            <p>华通饭庄店面两百多平米，招待亲朋，同学聚会，商务会客</p>
            <p></p>
        </dd>
    </dl>
</div>

<div class="foot">
    <div class="foot-wrap">

        <div class="copyright">
            <p>CopyRight©2003-2015 www.91cy.cn All rigt rederved</p>
            <p>ICP备案号：京ICP备16047255号-3本站信息由会员自主添加，如信息涉及隐私等，网站不承担任何责任！</p>
        </div>
    </div>
</div>

</body>
<!--jq调用-->
<script src="../js/jquery-1.11.0.js" type="text/javascript"></script>

<script type="text/javascript">
    //导航当前项切换
    $(".nav-item").click(function(){
        $(this).parent("li").siblings().children().removeClass("nav-active");
        //点击对象的父级（li）的兄弟级（li）的子集（a）移除类
        $(this).addClass("nav-active");
        //给点击对象添加类
    });
    //新品推荐table切换
    var nSpan = document.getElementById("newfood-span");
    var newspan = nSpan.querySelectorAll("span");
    var oUl  = document.getElementById("newfood-table");
    var uls = oUl.querySelectorAll("ul");
    var last=newspan[0];
    for(var i=0;i<newspan.length;i++){
        newspan[i].index=i;  //给每一个按钮添加一个自定义属性，存储的是他们对应的索引值；
        newspan[i].onclick=function(){
            last.style.background="url(img/icon.png)";  //把上一次点击对象的背景更换掉
            uls[last.index].style.display="none"; //上一个对应的div，让他隐藏
            this.style.background="url(img/icon-2.png)"; //给当前点击的按钮添加背景
            uls[this.index].style.display="block"; //当前点击按钮对应的div显示
            last=this; 	//把上一次点击的对象更新成当前点击的对象
        };
    };
</script>
</html>
