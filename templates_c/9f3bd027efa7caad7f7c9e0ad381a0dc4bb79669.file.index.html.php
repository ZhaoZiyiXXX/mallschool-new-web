<?php /* Smarty version Smarty-3.1.19, created on 2014-12-20 15:27:25
         compiled from "templates\shop\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1697854951aa0666b27-93846115%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f3bd027efa7caad7f7c9e0ad381a0dc4bb79669' => 
    array (
      0 => 'templates\\shop\\index.html',
      1 => 1419058200,
      2 => 'file',
    ),
    'c73a908cc33e9641fff8e30c0558466590ee6b50' => 
    array (
      0 => 'templates\\base.html',
      1 => 1419046098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1697854951aa0666b27-93846115',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54951aa0770565_52081276',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54951aa0770565_52081276')) {function content_54951aa0770565_52081276($_smarty_tpl) {?><!DOCTYPE html>
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
	
 <script src="/static/js/baiduTemplate.js"></script> 
<script>
$(document).ready(function(){
	$("#submit").click(function(){
		$.ajax({
			type:"GET",
			url:"<?php echo $_smarty_tpl->tpl_vars['api_url']->value;?>
"+"/PrintFile",
			dataType:"json",
			data:{
				type:"shop",
				q:$("#q").val()
				},
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

function changestatus(id){
	$.ajax({
		type:"POST",
		url:"<?php echo $_smarty_tpl->tpl_vars['api_url']->value;?>
"+"/PrintFile",
		dataType:"json",
		data:{
			id:id,
			type:"update",
			status:"已打印"
			},
		success:function(data){
			$.ajax({
				type:"GET",
				url:"<?php echo $_smarty_tpl->tpl_vars['api_url']->value;?>
"+"/PrintFile",
				dataType:"json",
				data:{
					type:"shop",
					q:$("#q").val()
					},
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
		},
		error:function(data){
		},
	});
}
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
		<div id="box" class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-xs-12 tac">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
				<div class="input-group">
			      <input id="q" type="text" class="form-control" placeholder="输入店铺号查询">
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
						<th>页数</th>
						<th>尺寸</th>
						<th>颜色</th>
						<th>单面双面</th>
						<th>领取时间</th>
						<th>用户备注</th>
						<th>状态</th>
						<th>操作</th>
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
						<td><a href="http://api.mallschool.com/download?id=<<?php ?>%=data[i].id%<?php ?>>"><<?php ?>%=data[i].filename%<?php ?>></a></td>
						<td><<?php ?>%=data[i].pagecount%<?php ?>></td>
						<td><<?php ?>%=data[i].pagesize%<?php ?>></td>
						<td><<?php ?>%=data[i].pagecolor%<?php ?>></td>
						<td><<?php ?>%=data[i].isduplex%<?php ?>></td>
						<td><<?php ?>%=data[i].gettime%<?php ?>></td>
						<td><<?php ?>%=data[i].mark%<?php ?>></td>
						<td><<?php ?>%=data[i].status%<?php ?>></td>
						<td><button  id="<<?php ?>%=data[i].id%<?php ?>>" name ="handleorder" class="btn btn-sm btn-default 
								<<?php ?>%if(data[i].status != "待打印") { %<?php ?>>dpn<<?php ?>%}%<?php ?>>
								" onclick="changestatus('<<?php ?>%=data[i].id%<?php ?>>');">接单</button></td>
					</tr>
<<?php ?>%}%<?php ?>>
<!-- 模板结束 -->   
</script>


</body>
</html><?php }} ?>
