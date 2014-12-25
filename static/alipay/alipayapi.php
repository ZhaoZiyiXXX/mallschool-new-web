<?php
/* *
 * 功能：即时到账交易接口接入页
 * 版本：3.3
 * 修改日期：2012-07-23
 * 说明：
 * 以下代码只是为了方便商户测试而提供的样例代码，商户可以根据自己网站的需要，按照技术文档编写,并非一定要使用该代码。
 * 该代码仅供学习和研究支付宝接口使用，只是提供一个参考。

 *************************注意*************************
 * 如果您在接口集成过程中遇到问题，可以按照下面的途径来解决
 * 1、商户服务中心（https://b.alipay.com/support/helperApply.htm?action=consultationApply），提交申请集成协助，我们会有专业的技术工程师主动联系您协助解决
 * 2、商户帮助中心（http://help.alipay.com/support/232511-16307/0-16307.htm?sh=Y&info_type=9）
 * 3、支付宝论坛（http://club.alipay.com/read-htm-tid-8681712.html）
 * 如果不想使用扩展功能请把扩展功能参数赋空值。
 */

require_once("alipay.config.php");
require_once("lib/alipay_submit.class.php");

//构造要请求的参数数组，无需改动
$parameter = array(
		//基本参数（不可空）
		"service" => "create_direct_pay_by_user",//接口名称
		"partner" => trim($alipay_config['partner']),//合作者身份ID
		"_input_charset"	=> trim(strtolower($alipay_config['input_charset'])),//参数编码字符集
		//sign_type、sign由alipay_submit类自动添加
		
		//基本参数（可空）
		"notify_url"	=> $alipay_config['api_url']."/Alipay/Notify",//服务器异步通知页面路径
		"return_url"	=> $alipay_config['base_url']."/AlipayReturn.html",//同步回传页面
		"error_notify_url" =>  $alipay_config['api_url']."/Alipay/ErrorNotify",//异常通知页面
		
		//业务参数（不可空）
		"out_trade_no"	=> $_POST['WIDout_trade_no'],//商户网站唯一订单号
		"subject"	=> $_POST['WIDsubject'],//商品名称
		"payment_type"	=> "1",//支付类型
		"total_fee"	=> $_POST['WIDtotal_fee'],//交易金额
		"seller_id" => $alipay_config['partner'],//卖家支付宝用户号
		
		//业务参数（可空）
		"body"	=> "测试的商品描述",//商品描述
		"extra_common_param" =>urlencode($_POST['ticket']) ,//微信绑定二维码ticket
);

//建立请求

$alipaySubmit = new AlipaySubmit($alipay_config);

$html_text = $alipaySubmit->buildRequestForm($parameter,"get", "确认");
echo $html_text;
?>