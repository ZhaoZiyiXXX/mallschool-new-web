<?php /* Smarty version Smarty-3.1.19, created on 2014-12-15 09:28:41
         compiled from "templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:29886548ba2511f7680-98681750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be98d586ed2efb7d6ab9ff0e6d563de4ab64e417' => 
    array (
      0 => 'templates\\index.html',
      1 => 1418606911,
      2 => 'file',
    ),
    '475bc180badbc9af0233b46cc491488503c0ea95' => 
    array (
      0 => 'templates\\base.html',
      1 => 1418476363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29886548ba2511f7680-98681750',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_548ba2512ab1b4_45427937',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548ba2512ab1b4_45427937')) {function content_548ba2512ab1b4_45427937($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

<title>在线打印</title>

<!-- Bootstrap -->
<link href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" 	rel="stylesheet">
<link href="/static/css/lib.css" rel="stylesheet">
<link href="/static/css/main.css" rel="stylesheet">

<!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="/static/js/jquery-1.11.1.min.js"></script>
<script src="/static/js/jquery.easing.1.3.js"></script>
</head>
<body>
	<div class="top">
	<a class="menu-left" href="/"><span
				class="glyphicon glyphicon-home"></span> 首 页</a> 
	<a class="menu-right" href="/query"><span 
				class="glyphicon glyphicon-question-sign"></span>订单查询 </a>
	<a class="menu-right" href="/upload"><span
				class="glyphicon glyphicon-edit"></span> 提交订单</a>

	</div>
	
<script>
$(document).ready(function(){
	$("#title1").fadeIn({
	     duration: 1000, 
	     easing: 'easeInExpo', 
	     complete:  function(){},
	 });
	$("#title2").fadeIn({
	     duration: 2000, 
	     easing: 'easeInExpo', 
	     complete:  function(){},
	 });
	$("#title3").fadeIn({
	     duration: 3000, 
	     easing: 'easeInExpo', 
	     complete: function(){},
	 });
	$("#click1").fadeIn({
	     duration: 4000, 
	     easing: 'easeInExpo', 
	     complete: function(){ 
	     },
	 });
	
	$("#click2").fadeIn({
	     duration: 4000, 
	     easing: 'easeInExpo', 
	     complete: function(){ 
	     },
	 });

});
</script>
<style>
#box{
	padding-top:20px;
}
h1{
	display:none;
}
#click1{
	margin-top:50px;
	display:none;
}
#click2{
	display:none;
	margin-top:50px;
}

</style>
<div class="container-fluid">
	<div class="row" style="text-align: center">
		<div id="box" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h1 id="title1" class="ffyh" >期末考试期间，打印还要排队等？</h1>
			<h1 id="title2" class="ffyh" >打印店电脑病毒多，不想插U盘？</h1>
			<h1 id="title3" class="ffyh" >打印机上文件太多找不到自己资料？</h1>
			<a href="/upload"><img id="click1" alt="提交打印" src="/static/images/indexbutton.jpg" /></a>
			<a href="/query"><img id="click2" alt="提交打印" src="/static/images/querybutton.jpg" /></a>
		</div>
	</div>
</div>


</body>
</html><?php }} ?>
