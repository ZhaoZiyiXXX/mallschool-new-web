{!extends file='base.html'!} {!block name=base!}
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
	$extra_common_parm = $_GET['extra_common_parm'];//公用回传参数，自定义返回
?>
<div class="row tac">
	<h1>支付成功！</h1>
</div>
<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
      	<div class="qrcode"><img src="https://mp.weixin.qq.com/cgi-bin/showqrcode?ticket=<?php echo urldecode($extra_common_parm)?>"  id="qrcodeimg"/></div>
      	<div class="content"><p>用微信扫描左侧二维码，关注微信平台并绑定该订单，订单打印完成之后会向您发送通知</p></div>
</div>
{!/block!}