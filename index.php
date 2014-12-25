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
