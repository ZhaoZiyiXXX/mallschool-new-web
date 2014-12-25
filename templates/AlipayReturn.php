<!DOCTYPE html>
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
	
<style>
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
</style>
<?php
	$out_trade_no = $_GET['out_trade_no'];//商户网站唯一订单号
	$subject = $_GET['subject'];//商品名称
	$trade_status = $_GET['trade_status'];//交易状态
	$body = $_GET['body'];//商品描述
	$extra_common_param = $_GET['extra_common_param'];//公用回传参数，自定义返回
?>
<div class="row tac">
	<h1>支付成功！</h1>
</div>
<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
      	<div class="qrcode"><img src="https://mp.weixin.qq.com/cgi-bin/showqrcode?ticket=<?php echo $extra_common_param;?>"  id="qrcodeimg"/></div>
      	<div class="content"><h2>用微信扫描左侧二维码，关注微信平台并绑定该订单，订单打印完成之后会向您发送通知</h2></div>
</div>


</body>
</html>