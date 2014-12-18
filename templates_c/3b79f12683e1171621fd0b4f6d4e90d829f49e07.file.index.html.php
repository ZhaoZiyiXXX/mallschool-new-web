<?php /* Smarty version Smarty-3.1.19, created on 2014-12-18 23:40:20
         compiled from "templates\query\index.html" */ ?>
<?php /*%%SmartyHeaderCode:181545492f564d30f68-78032004%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b79f12683e1171621fd0b4f6d4e90d829f49e07' => 
    array (
      0 => 'templates\\query\\index.html',
      1 => 1418692091,
      2 => 'file',
    ),
    'c73a908cc33e9641fff8e30c0558466590ee6b50' => 
    array (
      0 => 'templates\\base.html',
      1 => 1418476363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181545492f564d30f68-78032004',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5492f564df0615_81429374',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5492f564df0615_81429374')) {function content_5492f564df0615_81429374($_smarty_tpl) {?><!DOCTYPE html>
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
	
 <script src="/static/js/baiduTemplate.js"></script> 
<script>
$(document).ready(function(){
	$("#submit").click(function(){
		$.ajax({
			type:"GET",
			url:"<?php echo $_smarty_tpl->tpl_vars['api_url']->value;?>
"+"/PrintFile",
			dataType:"json",
			data:{tel:$("#q").val()},
			success:function(data){
				if(data.result ==0){
					var bt=baidu.template;
					var html=bt('t:search_result',data);
					$("#result").html(html);
				}
			},
			error:function(data){
			},
		});
	});
});
</script>
<style>
#box{
	padding-top:20px;
}

.btn{
	min-width:100px;
	max-width:200px;
}

th{
	text-align:center;
}

td{
	text-align:center;
}

</style>
<div class="container-fluid">
	<div class="row" style="text-align: center">
		<div id="box" class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-10 col-xs-12 tac">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
				<div class="input-group">
			      <input id="q" type="text" class="form-control" placeholder="输入手机号查询">
			      <span class="input-group-btn">
			        <button class="btn btn-default" type="button" id="submit">搜索</button>
			      </span>
			    </div>
			    </div>
			</div>
			<table class="table">
				<thead>
					<tr>
						<th>手机号</th>
						<th>文件名</th>
						<th>店铺名称</th>
						<th>状态</th>
					</tr>
				</thead>
				<tbody id="result">
				</tbody>
			</table>
		</div>
	</div>
</div>
<script id='t:search_result' type="text/template">
<!-- 模板部分 -->
<<?php ?>% for(var i = 0; i<data.length;i++){%<?php ?>>
<tr>
	<td><<?php ?>%=data[i].tel%<?php ?>></td>
	<td><<?php ?>%=data[i].filename%<?php ?>></td>
	<td><<?php ?>%=data[i].shopname%<?php ?>></td>
	<td><<?php ?>%=data[i].status%<?php ?>></td>
</tr>
<<?php ?>%}%<?php ?>>
<!-- 模板结束 -->   
</script>


</body>
</html><?php }} ?>
