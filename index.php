<!DOCTYPE HTML> 
<html> 
<head> 
    <meta charset="UTF-8" /> 
    <title>老王小修与狗</title>

<link rel="stylesheet" type="text/css" href="css/index.css">

</head> 
<body> 
    <div class="title" backgroud="imgs/title_backgroud.jpg">
        <img class="title_icon" src="imgs/icon.jpg">
    </div>

    <nav> 
    <ul class="clear"> 
        <li class="first"><a href="#">Those things</a></li> 
        <li> 
            <span class="Darrow"></span> 
            <a href="artistgirl.html">小修的窝</a> 
            <dl> 
            <dt><span class="arrow"></span></dt> 
            <dd><a href="#">手绘</a></dd>
            <dd><a href="#">UI制作</a></dd> 
            <dd><a href="#">平面</a></dd>
            </dl>
        </li> 
        <li> 
            <span class="Darrow"></span> 
            <a href="testerboy.html">老王的窝</a> 
            <dl> 
            <dt><span class="arrow"></span></dt>
            <dd><a href="#">测试知识</a></dd> 
            <dd><a href="#">各种奇怪的工具</a></dd> 
            <dd><a href="#">代码学习笔记</a></dd>
            <dd><a href="#">脑洞大开的事情</a></dd> 
            </dl> 
        </li> 
        <li> 
            <span class="Darrow"></span> 
            <a href="ourstory">传说中的狗狗们</a> 
            <dl> 
            <dt><span class="arrow"></span></dt> 
            <dd><a href="#">电影</a></dd> 
            <dd><a href="#">小说</a></dd> 
            <dd><a href="#">动画片</a></dd> 
            <dd><a href="#">狗狗</a></dd>
            <dd><a href="#">关于那些的记忆</a></dd>
            </dl> 
        </li> 
        <li class="last"><a href="aboutus.html">关于我们</a></li> 
    </ul> 
    </nav>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript">
    $(function(){
        var timer=setInterval(function(){
            if($(".banner li:last").is(":hidden")){
                $(".banner li:visible").addClass("on");
                $(".banner li[class=on]").next().fadeIn("slow");
                $(".banner li[class=on]").hide().removeClass("on");
            }else{
                $(".banner li:last").hide();
                $(".banner li:first").fadeIn("slow");
            }
        },3000)

        $(".banner li").hover(function(){
            clearInterval(timer);
        },function(){
            timer=setInterval(function(){
            if($(".banner li:last").is(":hidden")){
                $(".banner li:visible").addClass("on");
                $(".banner li[class=on]").next().fadeIn("slow");
                $(".banner li[class=on]").hide().removeClass("on");
            }else{
                $(".banner li:last").hide();
                $(".banner li:first").fadeIn("slow");
            }
        },3000)
        })
    })
       
    </script>

    <ul class="banner">
        <li><img src="316x316.png"></li>
        <li><img src="720x480_2.png"></li>
        <li><img src="720x480.png"></li>
    </ul>
    
    <HR style="FILTER: progid:DXImageTransform.Microsoft.Shadow(color:#987cb9,direction:145,strength:15); width:90%; margin-left:5%; margin-top:10px"  color=#987cb9 SIZE=1>

    <div class="main_infos">
        <div class="main_info">

        </div>

<HR style="FILTER: progid:DXImageTransform.Microsoft.Shadow(color:#987cb9,direction:145,strength:15); width:90%; margin-left:5%; margin-top:10px"  color=#987cb9 SIZE=1>

        <div class="main_info">

        </div>


    </div>

    <div class="user_info">

    </div>


    <div class="bottom_info">
        <a href="#">作者：哇哈哈哈哈</a>2015-07-08
        <a href="#">你说会好玩么</a>
        <span>不知道是怎么回事</span>
    </div>
</body> 
</html> 