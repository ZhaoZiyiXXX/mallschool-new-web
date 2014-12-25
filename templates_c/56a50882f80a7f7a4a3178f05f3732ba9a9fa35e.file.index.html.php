<?php /* Smarty version Smarty-3.1.19, created on 2014-12-20 16:21:48
         compiled from "templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:212765492f0e25457c1-72378539%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56a50882f80a7f7a4a3178f05f3732ba9a9fa35e' => 
    array (
      0 => 'templates\\index.html',
      1 => 1418917418,
      2 => 'file',
    ),
    'c73a908cc33e9641fff8e30c0558466590ee6b50' => 
    array (
      0 => 'templates\\base.html',
      1 => 1419046098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212765492f0e25457c1-72378539',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5492f0e25ce360_34148510',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5492f0e25ce360_34148510')) {function content_5492f0e25ce360_34148510($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

<title>在线打印</title>

<!-- Bootstrap -->
<link href="/static/css/bootstrap.min.css" 	rel="stylesheet">
<link href="/static/css/lib.css" rel="stylesheet">
<link href="/static/css/main.css" rel="stylesheet">

<!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/static/js/jquery-1.11.1.min.js"></script>
<script src="/static/js/bootstrap.min.js"></script>
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
	margin:50px 20px;
	display:none;
	background:url(/static/images/print-2.png) no-repeat;
	width:150px;
	height:150px;
	float:left;
}

#click1:hover{
	background:url(/static/images/print-1.png) no-repeat;
}

#click2{
	margin:50px 20px;
	display:none;
	background:url(/static/images/query-2.png) no-repeat;
	width:150px;
	height:150px;
	float:left;
}

#click2:hover{
	background:url(/static/images/query-1.png) no-repeat;
}

.buttongroup{
	margin:0px auto;
	display:block;
	width:380px;
	height:200px;
	text-align:center;
}
.titleimg{
	margin:10px auto;
	display:none;
}
</style>
<div class="container-fluid">
	<div class="row" style="text-align: center">
		<div id="box" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<img id="title1" class="titleimg" src="/static/images/1.png" />
			<br/>
			<img id="title2"  class="titleimg" src="/static/images/2.png" />
			<br/>
			<img id="title3"  class="titleimg" src="/static/images/3.png" />
			<br/>
			<div class="buttongroup">
				<a  id="click1"  href="/upload"></a>
				<a  id="click2"  href="/query"></a>
			</div>
		</div>
	</div>
</div>


</body>
</html><?php }} ?>
