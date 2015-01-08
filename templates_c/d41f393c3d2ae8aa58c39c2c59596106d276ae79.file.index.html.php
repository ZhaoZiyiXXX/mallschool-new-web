<?php /* Smarty version Smarty-3.1.19, created on 2015-01-08 11:23:31
         compiled from "templates\upload\index.html" */ ?>
<?php /*%%SmartyHeaderCode:105115492f250a080c9-57433249%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd41f393c3d2ae8aa58c39c2c59596106d276ae79' => 
    array (
      0 => 'templates\\upload\\index.html',
      1 => 1420687407,
      2 => 'file',
    ),
    'c73a908cc33e9641fff8e30c0558466590ee6b50' => 
    array (
      0 => 'templates\\base.html',
      1 => 1419046098,
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
	
<script src="/static/js/jquery.form.js"></script>
<script src="/static/js/baiduTemplate.js"></script>
<script src="/static/js/upload.js"></script>
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

.pricefont{
	font-size:1em;
	line-height:30px;
	height:30px;
	float:left;
	color:#ff6640;
	font-family:微软雅黑;
	margin-left:-10px;
	font-weight:bold;
}

#filename{
	font-size:1.2em;
	font-color:block;
	font-weight:bold ;
}
#pricetable{
	margin-top:1000px;
	margin-left:-150px;
}

.qrcode{
	width:50%;
	height:auto;
	float:left;
	padding:10px;
}
.content{
	width:50%;
	height:auto;
	float:right;
	padding:20px;
}

#qrcodeimg{
	width:80%;
}

.mapbtn{
	cursor:pointer;
}

.helptext{
	font-size:0.7em;
	margin:-10px auto;
}
.shopbox{
	display:inline-block;
	height:1.5em;
	width:100%;
	margin:5px 0;
}
.shopbox a{
	display:block;
	background-color:#5bc0de;
	color:#fff;
	padding:3px;
	float:left;
	margin:0 5px;
	border:1px solid #eee;
}

.main-im{ position:fixed; right: 10px; top:200px; z-index: 100; width: 110px; height: 272px; }
.main-im .qq-a { display: block; width: 106px; height: 86px; font-size: 14px; color: #0484cd; text-align: center; position: relative; }
.main-im .qq-a span { bottom: 5px; position: absolute; width: 90px; left: 10px; }
.main-im .qq-hover-c { width: 70px; height: 70px; border-radius: 35px; position: absolute; left: 18px; top: 10px; overflow: hidden; z-index: 9; }
.main-im .qq-container { z-index: 99; position: absolute; width: 109px; height: 90px; border-top-left-radius: 10px; border-top-right-radius: 10px; border-bottom: 1px solid #dddddd; background: url(/static/images/qq-icon-bg.png) no-repeat center 8px; }
.main-im .img-qq {max-width: 60px; display: block; position: absolute; left: 6px; top: 3px; -moz-transition: all 0.5s; -webkit-transition: all 0.5s; -o-transition: all 0.5s; transition: all 0.5s; }
.main-im .im-qq:hover .img-qq{ max-width: 70px; left: 1px; top: 8px; position: absolute; }
.main-im .im_main {background: #F9FAFB; border: 1px solid #dddddd; border-radius: 10px; background: #F9FAFB;display:none;}
.main-im .im_main .im-tel { color: #000000; text-align: center; width: 109px; height: 196px; border-bottom: 1px solid #dddddd; }
.main-im .im_main .im-tel div{font-weight:bold;font-size: 12px;margin-top:11px;}
.main-im .im_main .im-tel .tel-num { font-family: Arial; font-weight: bold; color: #e66d15;}
.main-im .im_main .im-tel:hover { background: #fafafa; }
.main-im .im_main .weixing-container {width: 55px; height: 47px; border-right: 1px solid #dddddd; background: #f5f5f5; border-bottom-left-radius: 10px; background: url(/static/images/weixing-icon.png) no-repeat center center;float:left;}
.main-im .im_main .weixing-show {width: 112px; height: 172px; background: #ffffff; border-radius: 10px; border: 1px solid #dddddd; position: absolute; left: -125px; top: -126px; }
.main-im .im_main .weixing-show .weixing-sanjiao {width:0; height: 0; border-style: solid; border-color: transparent transparent transparent #ffffff; border-width: 6px; left: 112px; top: 134px; position: absolute; z-index: 2;}
.main-im .im_main .weixing-show .weixing-sanjiao-big { width: 0; height: 0; border-style: solid; border-color: transparent transparent transparent #dddddd; border-width: 8px; left: 112px; top: 132px; position: absolute; }
.main-im .im_main .weixing-show .weixing-ma { width: 104px; height: 103px; padding-left: 5px; padding-top: 5px; }
.main-im .im_main .weixing-show .weixing-txt{position:absolute;top:110px;left:7px;width:100px;margin:0 auto; text-align:center; font-size:12px;}
.main-im .im_main .go-top { width: 50px; height: 47px; background: #f5f5f5; border-bottom-right-radius: 10px; background: url(/static/images/toTop-icon.png) no-repeat center center;float:right;}
.main-im .im_main .go-top a { display: block; width: 52px; height: 47px; }
.main-im .close-im { position: absolute; right: 10px; top: -12px; z-index: 100; width: 24px; height: 24px; }
.main-im .close-im a { display: block; width: 24px; height: 24px; background: url(/static/images/close_im.png) no-repeat left top; }
.main-im .close-im a:hover { text-decoration: none; }
.main-im .open-im { cursor: pointer; margin-left: 68px; width: 40px; height: 133px; background: url(/static/images/open_im.png) no-repeat left top; }
</style>
<div class="container-fluid">
<div id="resultrest"></div>
<div class="main-im">
  <div id="open_im" class="open-im"></div>  
  <div class="im_main" id="im_main">
    <div id="close_im" class="close-im"><a href="javascript:void(0);" title="点击关闭"></a></div>
    <a href="javascript:;" class="im-qq qq-a" title="在线QQ客服">
    <div class="qq-container"></div>
    <div class="qq-hover-c"><img class="img-qq" src="/static/images/qq.png"></div>
    </a>
    
    <div class="im-tel">
      <div>商家咨询QQ</div>
      <div class="tel-num"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=752251080&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:752251080:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a></div>
      <div>喵校园客服</div>
      <div class="tel-num"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=752251080&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:752251080:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a></div>
      <div class="tel-num"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=51062204&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:51062204:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a></div>
      <div class="tel-num"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2251254972&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:2251254972:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a></div>
    </div>
    <div class="im-footer" style="position:relative">
      <div class="weixing-container">
        <div class="weixing-show">
           <div class="weixing-txt">微信扫一扫<br>关注喵校园</div>
          <img class="weixing-ma" src="/static/images/qrcode.jpg">
          <div class="weixing-sanjiao"></div>
          <div class="weixing-sanjiao-big"></div>
        </div>
      </div>
      <div class="go-top"><a href="javascript:;" title="返回顶部"></a> </div>
	 <div style="clear:both"></div>
    </div>
  </div>
</div>
	<div class="row" style="text-align: center">
		<div class="col-lg-7 col-lg-offset-1 col-md-7 col-md-offset-1 col-sm-7 col-xs-12 tac">
			<h3 style="margin-left:-100px;">提交订单</h3>
			<form id="configform" class="form-horizontal"  role="form" >
				<div class="form-group">
			    	<label for="shopname" class="col-sm-2 control-label">店铺名称 </label>
			    	<div class="col-lg-6 col-md-6 col-sm-6 tal">
						<p class=" form-control-static" >同济嘉定优之优图文（申通快递旁）<!-- <span class="badge mapbtn" data-toggle="modal" data-target="#mapModal">查看地图</span> --></p>
						<input type="hidden" value="同济嘉定优之优图文" name="shopname" >
					</div>
			    </div>
			    <div class="form-group">
			    	<label for="pagesize" class="col-sm-2 control-label">纸张尺寸</label>
			    	<div class="col-lg-6 col-md-6 col-sm-6">
					    <select id="pagesize"  name="pagesize"class="form-control" >
						</select>
					</div>
			    </div>
			    <div class="form-group">
			    	<label for="pagecolor" class="col-sm-2 control-label">选择色彩</label>
			    	<div class="col-lg-6 col-md-6 col-sm-6">
					    <select id="pagecolor"  name="pagecolor" class="form-control">
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
			    	<label for="pagecount" class="col-sm-2 control-label">填写页数</label>
			    	<div class="col-lg-3 col-md-3 col-sm-3">
					    <input id="pagecount" name="pagecount"  type="text" class="form-control" placeholder="请填写数字">
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3">
						<p id="price" class="pricefont" ></p>
					</div>
			    </div>
			    <div class="form-group">
			    	<label class="col-sm-2 control-label"></label>
			    	<div class="col-lg-6 col-md-6 col-sm-6 tal helptext">
						<p class=" form-control-static " >如果您填写的页数与文档实际页数不同，可能会需要您到店确认后再打印，因此为了您能及时取到文档，请准确填写打印页数</p>
					</div>
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
						<input id="mark" name="mark" type="text" class="form-control" placeholder="特殊要求请标注，比如一面多页，不打印全文等">
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
			  	<input type="hidden" name="orderprice"  id="orderprice" />
 			</form>
		</div>
		<div id="pricetable" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
			<h3>价格表</h3>
			<table class="table">
				<thead>
					<tr>
						<th class="s1">大小</th>
						<th class="s2">颜色</th>
						<th class="s3">单面</th>
						<th class="s4">双面</th>
					</tr>
				</thead>
				<tbody id="prices">
				</tbody>
			</table>
		</div>
	</div>
</div>
<!-- Modal -->
<div class="modal fade"  id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
       <h4 class="modal-title">正在为您跳转到支付宝页面...</h4>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- Modal -->
<div class="modal fade"  id="mapModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body" style="height:260px;display:block">
		<img src="/static/images/print-2.png"/>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="modal fade"  id="selectshop">
  <div class="modal-dialog">
    <div class="modal-content">
    	<div class="modal-header">
       		<h4 class="modal-title">选择店铺</h4>
      	</div>
      <div class="modal-body">
	      <div id="schoolbox" class="shopbox">
	      	<a>test</a><a>test</a><a>test</a><a>test</a><a>test</a>
	      </div>
	      <div id="schoolshopbox" class="shopbox">
	      	<a>test</a><a>test</a><a>test</a><a>test</a><a>test</a>
	      </div>
      </div>
      <div class="modal-footer">
      	<button id="selectshopsubmit" class="btn btn-default">确定</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script id='t:pricetable' type="text/template">
<!-- 模板部分 -->
<<?php ?>%if(data["A4"]["黑白"]) { %<?php ?>>
<tr>
	<td class="s5">A4</td>
	<td class="s6">黑白</td>
	<td class="s5"><<?php ?>%=data["A4"]["黑白"]["单面"]%<?php ?>></td>
	<td class="s6"><<?php ?>%=data["A4"]["黑白"]["双面"]%<?php ?>></td>
</tr>
<<?php ?>%}%<?php ?>>
<<?php ?>%if(data["A4"]["彩色"]) { %<?php ?>>
<tr>
	<td class="s5">A4</td>
	<td class="s6">彩色</td>
	<td class="s5"><<?php ?>%=data["A4"]["彩色"]["单面"]%<?php ?>></td>
	<td class="s6"><<?php ?>%=data["A4"]["彩色"]["双面"]%<?php ?>></td>
</tr>
<<?php ?>%}%<?php ?>>
<<?php ?>%if(data["A3"]["黑白"]) { %<?php ?>>
<tr>
	<td class="s5">A3</td>
	<td class="s6">黑白</td>
	<td class="s5"><<?php ?>%=data["A3"]["黑白"]["单面"]%<?php ?>></td>
	<td class="s6"><<?php ?>%=data["A3"]["黑白"]["双面"]%<?php ?>></td>
</tr>
<<?php ?>%}%<?php ?>>
<<?php ?>%if(data["A3"]["彩色"]) { %<?php ?>>
<tr>
	<td class="s5">A3</td>
	<td class="s6">彩色</td>
	<td class="s5"><<?php ?>%=data["A3"]["彩色"]["单面"]%<?php ?>></td>
	<td class="s6"><<?php ?>%=data["A3"]["彩色"]["双面"]%<?php ?>></td>
</tr>
<<?php ?>%}%<?php ?>>
<!-- 模板结束 -->   
</script>


</body>
</html><?php }} ?>
