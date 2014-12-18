<?php /* Smarty version Smarty-3.1.19, created on 2014-12-18 23:58:15
         compiled from "templates\upload\index.html" */ ?>
<?php /*%%SmartyHeaderCode:105115492f250a080c9-57433249%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd41f393c3d2ae8aa58c39c2c59596106d276ae79' => 
    array (
      0 => 'templates\\upload\\index.html',
      1 => 1418918294,
      2 => 'file',
    ),
    'c73a908cc33e9641fff8e30c0558466590ee6b50' => 
    array (
      0 => 'templates\\base.html',
      1 => 1418476363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105115492f250a080c9-57433249',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5492f250ac7762_18755668',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5492f250ac7762_18755668')) {function content_5492f250ac7762_18755668($_smarty_tpl) {?><!DOCTYPE html>
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
	
 <script src="/static/js/jquery.form.js"></script> 
<style>
/*a  upload */
.a-upload {
	padding: 0px 10px;
	height: 30px;
	line-height: 30px;
	position: relative;
	cursor: pointer;
	color: #888;
	background: #fafafa;
	border: 1px solid #ddd;
	border-radius: 4px;
	overflow: hidden;
	display: inline-block;
	float:left;
	*display: inline;
	*zoom: 1;

}
 
.a-upload  input {
	position: absolute;
	font-size: 100px;
	right: 0;
	top: 0;
	opacity: 0;
	filter: alpha(opacity=0);
	cursor: pointer
}
 
.a-upload:hover {
	color: #444;
	background: #eee;
	border-color: #ccc;
	text-decoration: none
}
th{
	text-align:center;
	color:#fff;
}

th.s1{
	background: #F6C286;
}

th.s2{
	background: #F9D776;
}

th.s3{
	background: #BFCE7D;
}

th.s4{
	background: #9CC289;
}

td{
	text-align:center;
}

td.s5{
	background:#F6F6F6;
}
td.s6{
	background:#F1F1F1;
}
td.s7{
	background:#FAFAFA;
}
td.s8{
	background:#F8F8F8;
}

.tips{
	font-size:0.8em;
	line-height:30px;
	height:30px;
	padding:0 10px;
	display:block;
	float:left;
}

#filename{
	font-size:1.2em;
	font-color:block;
	font-weight:bold ;
}
#pricetable{
	margin-top:1000px;
}


</style>
<script>

$(document).ready(function(){
	//价格表动画效果
	var div = $("#pricetable");
	div.animate({marginTop:'0',opacity:'0.5'},"3000",'easeInExpo');
	div.animate({marginTop:'200',opacity:'0.6'},"4000",'easeOutExpo');
	div.animate({marginTop:'0',opacity:'0.7'},"4000",'easeInExpo');
	div.animate({marginTop:'70',opacity:'0.8'},"5000",'easeOutExpo');
	div.animate({marginTop:'0',opacity:'0.9'},"5000",'easeInExpo');
	$("input").keypress(function(e){
		var keyCode= e.keyCode?e.keyCode:e.witch?e.witch:e.charCode;
		if(keyCode == 13){
			return false;
		}
	});
	
	$('input[id=fileToUpload]').change(function() {
	    var path = $(this).val();
	    path = path.split("\\");
	    $('#filename').html(path[path.length-1]);
	    $('#submit').addClass("disabled");
	    $('#loading').removeClass("dpn");
	    $('#loading').prop("src","static/images/loading.gif");
	    
		var options = {
			    url:"<?php echo $_smarty_tpl->tpl_vars['api_url']->value;?>
"+"/PrintFile",
			    dataType: 'json',
			    type:"POST",
			    data:{type:"file"},
			    timeout:20000,
			    success: function(data) {
			    	$('#submit').removeClass("disabled");
			    	$('#loading').prop("src","/static/images/OK.png");
			    	$('#uploadfileid').val(data.data.id);
			    	$('#uploadfilepath').val(data.data.filepath);
			    	$('#uploadfilename').val($('#filename').html());
			    },
			    error:function(data){
			    	$('#submit').addClass("disabled");
			    	$('#loading').addClass("dpn");
			    	$('#filename').html("上传失败，请刷新后重试");
			    }
	    };
	    $('#configform').ajaxSubmit(options);
	});   
	var isduplex = "双面";
	var gettime = "隔天取";
	$(":radio").click(function(e){
		switch(e.target.id)
		{
			case "blankRadio1":
				gettime = "隔天取";
				break;
			case "blankRadio2":
				gettime = "当天取";
				break;
			case "blankRadio3":
				isduplex = "双面";
				break;
			case "blankRadio4":
				isduplex = "单面";
				break;
		}
		calcprice();
	});
	$("select").change(function(){
		calcprice();
	});
	$('#pagecount').change(function(){
		calcprice();
	});

	function calcprice(){
		var pagecount = $('#pagecount').val();
		if(pagecount!=""&!isNaN(pagecount)){
			var onepageprice = 0;
			switch($('#pagesize').val())
			{
				case "A4":
					if("黑白"==$('#pagecolor').val()){
						if("隔天取"==gettime){
							if("单面"==isduplex){
								onepageprice = 0.12;
							}else{
								onepageprice = 0.08;
							}
						}else{
							if("单面"==isduplex){
								onepageprice = 0.15;
							}else{
								onepageprice = 0.10;
							}
						}
					}else{
						if("隔天取"==gettime){
							if("单面"==isduplex){
								onepageprice = 0.90;
							}else{
								onepageprice = 0.90;
							}
						}else{
							if("单面"==isduplex){
								onepageprice = 1.00;
							}else{
								onepageprice = 1.00;
							}
						}
					}
					break;
				case "A3":
					if("黑白"==$('#pagecolor').val()){
						if("隔天取"==gettime){
							if("单面"==isduplex){
								onepageprice = 0.20;
							}else{
								onepageprice = 0.20;
							}
						}else{
							if("单面"==isduplex){
								onepageprice = 0.30;
							}else{
								onepageprice = 0.25;
							}
						}
					}else{
						if("隔天取"==gettime){
							if("单面"==isduplex){
								onepageprice = 1.80;
							}else{
								onepageprice = 1.80;
							}
						}else{
							if("单面"==isduplex){
								onepageprice = 2.00;
							}else{
								onepageprice = 2.00;
							}
						}
					}
					break;
				case "B4":
					if("黑白"==$('#pagecolor').val()){
						if("隔天取"==gettime){
							if("单面"==isduplex){
								onepageprice = 0.20;
							}else{
								onepageprice = 0.20;
							}
						}else{
							if("单面"==isduplex){
								onepageprice = 0.30;
							}else{
								onepageprice = 0.25;
							}
						}
					}else{
						if("隔天取"==gettime){
							if("单面"==isduplex){
								onepageprice = 1.80;
							}else{
								onepageprice = 1.80;
							}
						}else{
							if("单面"==isduplex){
								onepageprice = 2.00;
							}else{
								onepageprice = 2.00;
							}
						}
					}
					break;
			}
			var price = onepageprice * pagecount;
			$('span#price').html("总价："+price.toFixed(2)+"元");
		}
	}
	
	    $("#submit").click(function(){
	    	if($('submit').hasClass("disabled")){
	    		alert("请先选择要打印的文件");
	    	}else{
	    		if($('#tel').val()==""){
	    			alert("手机号是取货的凭证，也是唯一的查询订单的方法，请务必填写");
	    			$('#tel').focus();
	    			return false;
	    		}
	    		$.ajax({
	    			type:"POST",
	    			url:"<?php echo $_smarty_tpl->tpl_vars['api_url']->value;?>
"+"/PrintFile",
	    			dataType:"json",
	    			data:$("#configform").serialize(),
	    			success:function(data){
	    				if(data.result ==0){
	    					alert("提交成功");
	    				}else{
	    					alert("提交失败");
	    				}
	    			},
	    			error:function(data){
	    				alert("提交失败error");
	    			},
	    		});
	    	}
	    	return false;
	    });

	 
});
</script>
<div class="container-fluid">
	<div class="row" style="text-align: center">
		<div class="col-lg-7 col-lg-offset-1 col-md-7 col-md-offset-1 col-sm-7 col-xs-12 tac">
			<h3 style="margin-left:-100px;">提交订单</h3>
			<form id="configform" class="form-horizontal"  role="form" >
			    <div class="form-group">
			    	<label for="pagesize" class="col-sm-2 control-label">纸张尺寸</label>
			    	<div class="col-lg-6 col-md-6 col-sm-6">
					    <select id="pagesize"  name="pagesize"class="form-control" >
						    <option value="A4">A4</option>
						    <option  value="A3">A3</option>
						    <option  value="B4">B4</option>
						</select>
					</div>
			    </div>
			    <div class="form-group">
			    	<label for="pagecolor" class="col-sm-2 control-label">选择色彩</label>
			    	<div class="col-lg-6 col-md-6 col-sm-6">
					    <select id="pagecolor"  name="pagecolor" class="form-control">
					    	<option  value="黑白">黑白</option>
						    <option  value="彩色">彩色</option>
						</select>
					</div>
			    </div>
			    <div class="form-group">
			    	<label for="isduplex" class="col-sm-2 control-label">打印模式</label>
			    	<div class="tal col-lg-6 col-md-6 col-sm-6">
				       <div id="isduplex" class="radio">
				       	<label>
						    <input type="radio"  name="isduplex" id="blankRadio3" value="双面"  checked="checked">双面打印
						  </label>
						  <label>
						    <input type="radio"  name="isduplex" id="blankRadio4" value="单面">单面打印
					      </label>
						</div>
					</div>
			    </div>
			    <div class="form-group">
			    	<label for="gettime" class="col-sm-2 control-label">领取时间</label>
			    	<div class="tal col-lg-6 col-md-6 col-sm-6">
				       <div id="gettime" class="radio">
				       	  <label>
						    <input type="radio"  name="gettime" id="blankRadio1" value="隔天取"  checked="checked">隔天取（次日9点以后）
						  </label>
						  <label>
						    <input type="radio"  name="gettime" id="blankRadio2" value="当天取">当天取（至少间隔3小时）
					      </label>
					      
						</div>
					</div>
			    </div>
			    <div class="form-group">
			    	<label for="pagecount" class="col-sm-2 control-label">填写页数</label>
			    	<div class="col-lg-3 col-md-3 col-sm-3">
					    <input id="pagecount" name="pagecount"  type="text" class="form-control" placeholder="请填写数字">
					</div>
					<span id="price" class="tips" style="font-size:1em;color:#666"></span>
			    </div>
			    <div class="form-group">
			    	<label for="tel" class="col-sm-2 control-label">填写手机</label>
			    	<div class="col-lg-6 col-md-6 col-sm-6">
					    <input id="tel" name="tel"  type="text" class="form-control" placeholder="手机号将作为取货凭证">
					</div>
			    </div>
			    <div class="form-group">
			    	<label for="mark" class="col-sm-2 control-label">备注</label>
			    	<div class="col-lg-6 col-md-6 col-sm-6">
						<input id="mark" name="mark" type="text" class="form-control" placeholder="如果不是打印全文，请特别标注">
					</div>
			    </div>
			    <div class="form-group">
			    	<label for="pagesize" class="col-sm-2 control-label">上传文件</label>
			    	<div class="tal col-lg-6 col-md-6 col-sm-6">
						<a href="javascript:;" class="a-upload" >
							<input type="file" name="fileToUpload" id="fileToUpload">点击这里上传文件
							<input type="hidden" name="MAX_FILE_SIZE" value="10000000">
						</a><span class="tips">最大支持10M大小的文件</span>
					</div>
			    </div>
				<div class="form-group">
			    	<label class="col-sm-2 control-label"></label>
		    		<div class="col-sm-10 tal">
		      			<img id="loading" src="/static/images/loading.gif"  class="dpn" style="height:1em;width:1em;">
		      			<span id="filename" name="filename" class="form-control-static tal"></span>
		    		</div>
			  	</div>
			    <div class="form-group">
			    	<label for="pagesize" class="col-sm-2 control-label"></label>
			    	<div class="tl col-lg-6 col-md-6 col-sm-6">
			      		<button id="submit" type="submit" class="btn btn-default disabled">确认提交</button>
			    	</div>
			  	</div>
			  	<input type="hidden" name="uploadfileid"  id="uploadfileid" />
			  	<input type="hidden" name="uploadfilepath"  id="uploadfilepath" />
			  	<input type="hidden" name="uploadfilename"  id="uploadfilename" />
 			</form>
		</div>
		<div id="pricetable" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
			<h3>价格表</h3>
			<table class="table">
				<thead>
					<tr>
						<th class="s1">大小</th>
						<th class="s2">颜色</th>
						<th class="s3">当天取单价</th>
						<th class="s4">隔天取单价</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="s5">A4</td>
						<td class="s6">黑白</td>
						<td class="s5">单：0.15元<br/>双：0.20元</td>
						<td class="s6">单：0.12元<br/>双：0.16元</td>
					</tr>
					<tr>
						<td class="s7">A3</td>
						<td class="s8">黑白</td>
						<td class="s7">单：0.30元<br/>双：0.50元</td>
						<td class="s8">单：0.20元<br/>双：0.40元</td>
					</tr>
					<tr>
						<td class="s5">B4</td>
						<td class="s6">黑白</td>
						<td class="s5">单：0.30元<br/>双：0.50元</td>
						<td class="s6">单：0.20元<br/>双：0.40元</td>
					</tr>
					<tr>
						<td class="s7">A4</td>
						<td class="s8">彩色</td>
						<td class="s7">单：1.00元<br/>双：2.00元</td>
						<td class="s8">单：0.90元<br/>双：1.80元</td>
					</tr>
					<tr>
						<td class="s5">A3</td>
						<td class="s6">彩色</td>
						<td class="s5">单：2.00元<br/>双：4.00元</td>
						<td class="s6">单：1.80元<br/>双：3.60元</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>


</body>
</html><?php }} ?>
