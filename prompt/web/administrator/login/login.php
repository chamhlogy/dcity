<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="stylesheet" type="text/css" href="static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="lib/Hui-iconfont/1.0.8/iconfont.min.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<link rel="Shortcut Icon" href="temp/a.ico" />
<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
<style type="text/css">
body{background-color:black;}
button{cursor: pointer;}	
</style>
<script type="text/javascript">
$(function(){
	//得到焦点
	$("#password").focus(function(){
		$("#left_hand").animate({
			left: "150",
			top: " -38"
		},{step: function(){
			if(parseInt($("#left_hand").css("left"))>140){
				$("#left_hand").attr("class","left_hand");
			}
		}}, 2000);
		$("#right_hand").animate({
			right: "-64",
			top: "-38px"
		},{step: function(){
			if(parseInt($("#right_hand").css("right"))> -70){
				$("#right_hand").attr("class","right_hand");
			}
		}}, 2000);
	});
	//失去焦点
	$("#password").blur(function(){
		$("#left_hand").attr("class","initial_left_hand");
		$("#left_hand").attr("style","left:100px;top:-12px;");
		$("#right_hand").attr("class","initial_right_hand");
		$("#right_hand").attr("style","right:-112px;top:-12px");
	});
});
function open1(){
	$("#tanchu").show(200);
}	
function close1(){
	$("#tanchu").hide();
}	
</script>

<title>Zebra</title>
</head>

<body ontouchstart>
<div class="containBox">
<div class="containBox-bg"></div>
<header class="navbar-wrapper">
<div class="navbar navbar-black navbar-fixed-top">
<div class="container cl">
<nav class="nav navbar-nav nav-collapse" role="navigation" id="Hui-navbar">
<ul class="cl">
<li style="font-size:30px;font-family:'幼圆';">Zebra</li>
<li style="margin-left:70%">Administrator</li>

<li><button style="margin-left:50%;" class="btn btn-secondary radius" id="login" type="button" onClick="open1()">登录</button></li>
<li><button style="margin-left:75%;" class="btn btn-danger radius" id="register" type="button">注册</button></li>
						
</ul>
</nav>
<nav class="navbar-userbar hidden-xs"></nav>
</div>
</div>
</header>
<div class="wap-container" style="">
	<div id="slider-3">
		<div class="slider">
			<div class="bd">
				<ul>
				<li>
					<img src="temp/1.jpg">
				</li>
				<li>
					<img src="temp/2.jpg">
				</li>
				<li>
				 	<img src="temp/3.jpg">
				</li>
				</ul>
			</div>
		<ol class="hd cl dots">
			<li>1</li>
			<li>2</li>
			<li>3</li>
		</ol>
		</div>
	</div>
</div>
</div>
<div style="border-radius:15px;" class="tanchu" id="tanchu">
	<div style="width: 165px; height: 96px; position: absolute;">
		<div class="tou"></div>
		<div class="initial_left_hand" id="left_hand"></div>
		<div class="initial_right_hand" id="right_hand"></div>
	</div>
	<P style="padding: 30px 0px 10px; position: relative;">
		<span class="u_logo"></span>         
		<input class="ipt" type="text" id="username" placeholder="请输入账号" value=""> 
	</P>
	<P style="position: relative;">
		<span class="p_logo"></span>         
		<input class="ipt" id="password" type="password" placeholder="请输入密码" value="">   
	</P>
	<div style="height: 50px; line-height: 50px; margin-top: 30px; border-top-color: rgb(231, 231, 231); border-top-width: 1px; border-top-style: solid;">
	<P style="margin: 0px 35px 20px 45px;">
	<span style="float: left;font-size:18px;color:aqua;" id="show"></span> 
	<span style="float: right;">
		<button class="btn btn-secondary radius" id="login1" >登录</button> 
		<button class="btn btn-danger radius" onClick="close1()">关闭</button>
	</span>        
	</P>
	</div>
</div>
<script src="js/classie.js"></script>
<script src="js/modalEffects.js"></script>

<!-- for the blur effect -->
<!-- by @derSchepp https://github.com/Schepp/CSS-Filters-Polyfill -->
<script>
	// this is important for IEs
	var polyfilter_scriptpath = '/js/';
</script>
<script type="text/javascript" src="lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="lib/jquery.SuperSlide/2.1.1/jquery.SuperSlide.min.js"></script>
<script type="text/javascript">
	$(function(){jQuery("#slider-3 .slider").slide({mainCell:".bd ul",titCell:".hd li",trigger:"click",effect:"leftLoop",autoPlay:true,delayTime:700,interTime:1800,pnLoop:false,titOnClassName:"active"});});
</script>
<script type="text/javascript"> 	
	$('#login1').click(function(){
		$.ajax({
			type:'post',
			url:'login-h.php',
			data:{"username":$("#username").val(),"password":$("#password").val()},
			dataType:'text',
			success:function(msg){
	         if(msg==1){
			 	 $('#show').html("登陆成功"); 
			 	 <?php $_SESSION['username']="1";?>
				 window.location.href="../index/index.php";
			 }else if(msg==0){
				 $('#show').html("密码错误");
				 $("#username").val("");
				 $("#password").val("");
			 }},
		    error: function(XmlHttpRequest, textStatus, errorThrown){
					 $('#show').html("服务器繁忙");
					 $("#username").val("");
			 		 $("#password").val("");	
			}
               
			});
		});
	
</script>
</body>
</html>