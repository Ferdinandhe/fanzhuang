<?php
use yii\helpers\Url;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>美食系列</title>
    <link rel="stylesheet" type="text/css" href="/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/css/style.css"/>
</head>
<body>
<div class="clearfix nav">
    <a class="logo" href="javascript:;"></a>
    <ul class="clearfix nav-wrap">
        <li><a class="nav-item" href="<?php echo Url::toRoute('index/index')?>">首页</a></li>
        <li><a class="nav-item nav-active" href="<?php echo Url::toRoute('index/shop')?>">美食系列</a></li>
        <li><a class="nav-item" href="<?php echo Url::toRoute('index/rooms')?>">店面展示</a></li>
        <li><a class="nav-item" href="<?php echo Url::toRoute('index/we')?>">关于我们</a></li>
    </ul>
</div>

<div id="container">

</div>

<ul class="breadnav clearfix">
    <li class="bnav-item"><a href="index.php">首页</a></li>
    <li class="bnav-item">&lt;</li>
    <li class="bnav-item"><a href="meishi.html">美食系列</a></li>
    <li class="bnav-item">&lt;</li>
    <li class="bnav-item"><a href="javascript:;">全部菜品</a></li>
</ul>
<div class="clearfix table-wrap" id="tab-span">


    <?php foreach ($type as $key=>$val):?>
    <span class="table-item"><?php echo $val['type']?></span>
    <?php endforeach;?>
    <div class="search clearfix">
        <input class="inp-txt" type="text" name="address" value="输入关键字"
               onfocus="if(this.value=='输入关键字'){this.value=''};this.style.color='black';"
               onblur="if(this.value==''||this.value=='输入关键字'){this.value='输入关键字';this.style.color='gray';}" />
        <input class="inp-btn" type="button" name="" id="" value="搜索" />
    </div>
</div>
<div id="table-div">
    <?php foreach ($data as $key=>$val1):?>
    <div class="table-pic <?php if($key==0):?>table-show<?php endif;?> clearfix">
        <?php foreach ($val1 as $k=>$v):?>
            <a href="meishi-con.html" class="ms-wrap <?php if(($k+1)%3 !=0):?>ms-right<?php endif;?>">
					<span class="ms-pic">
						<img src="/img/ms-pic2.jpg" alt="" />
					</span>
                <h2 class="ms-tit"><?php echo $v['name']?></h2>
                <p class="ms-txt">价格：<?php echo $v['price']?>元</p>
            </a>
        <?php endforeach;?>
    </div>
    <?php  endforeach;?>



    <ul class="ms-paging clearfix">
        <li><a href="javascript:;" class="pag-item">&lt;</a></li>
        <li><a href="javascript:;" class="pag-item pag-active">1</a></li>
        <li><a href="javascript:;" class="pag-item">2</a></li>
        <li><a href="javascript:;" class="pag-item">3</a></li>
        <li><a href="javascript:;" class="pag-item">4</a></li>
        <li><a href="javascript:;" class="pag-item">&gt;</a></li>
    </ul>
</div>

<div class="foot">
    <div class="foot-wrap">

        <div class="copyright">
            <p>CopyRight©2003-2015 www.91cy.cn All rigt rederved</p>
            <p>版权所有：贵族食代牛排有限公司  来源:<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
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
    //美食系列当前项切换
    $(".table-item").click(function(){
        $(this).siblings().removeClass("table-active");
        $(this).addClass("table-active");
    });
    //美食系列table切换
    var oSpan = document.getElementById("tab-span");
    var spans = oSpan.querySelectorAll("span");
    var oDiv  = document.getElementById("table-div");
    var divs = oDiv.querySelectorAll("div");
    var last=spans[0];
    for(var i=0;i<spans.length;i++){
        spans[i].index=i;  //给每一个按钮添加一个自定义属性，存储的是他们对应的索引值；
        spans[i].onclick=function(){
            divs[last.index].style.display="none"; //上一个对应的div，让他隐藏
            divs[this.index].style.display="block"; //当前点击按钮对应的div显示
            last=this; 	//把上一次点击的对象更新成当前点击的对象
        };
    };
</script>
</html>
