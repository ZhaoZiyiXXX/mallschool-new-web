<?php
require_once ('Smarty-3.1.19/libs/Smarty.class.php');

$uri = $_SERVER['REQUEST_URI'];

require_once 'urls.php';
$has = false;
foreach ($urls as $reg => $tpl) {
    if (preg_match($reg, $uri, $matched)) {
        $has = true;
        $smarty = new Smarty();
        $smarty->setTemplateDir('templates/');
        $smarty->setCompileDir('templates_c/');
        $smarty->setConfigDir('configs/');
        $smarty->setCacheDir('cache/');
        $smarty->left_delimiter = "{!";
        $smarty->right_delimiter = "!}";
        foreach ($matched as $k=>$v){
            $smarty->assign($k, $v);
        }
        $smarty->assign("api_url", "http://api.mallschool.com");
        //如果连接指向了php文件，说明设计模式有问题，不应该出现php页面
        if("AlipayReturn.php"==$tpl){
        	$out_trade_no = $_GET['out_trade_no'];//商户网站唯一订单号
        	$subject = $_GET['subject'];//商品名称
        	$trade_status = $_GET['trade_status'];//交易状态
        	$body = $_GET['body'];//商品描述
        	$extra_common_param = $_GET['extra_common_param'];//公用回传参数，自定义返回
        	header("Location: /templates/AlipayReturn.php?out_trade_no=".
        	$out_trade_no."&subject=".$subject."&trade_status=".$trade_status."&body=".$body."&extra_common_param=".$extra_common_param); 
			//确保重定向后，后续代码不会被执行 
			exit;
        }
        if(".php" == substr($tpl, -4)){
        	$smarty->display($tpl);
        }else{
        	$smarty->display($tpl.'.html');
        }
        //$smarty->display($tpl.'.html');
        
        break;
    }
}
if (!$has){
    header('HTTP/1.1 404 Not Found');
    header("status: 404 Not Found");
}
