<?php /* Smarty version Smarty-3.1.19, created on 2014-12-13 16:36:30
         compiled from "templates\upload\uploadhandle.php" */ ?>
<?php /*%%SmartyHeaderCode:4730548beb2e961862-18098279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa63841fafb774ed87b23e491535585584658a5e' => 
    array (
      0 => 'templates\\upload\\uploadhandle.php',
      1 => 1418459777,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4730548beb2e961862-18098279',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_548beb2e9d2d00_34272521',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548beb2e9d2d00_34272521')) {function content_548beb2e9d2d00_34272521($_smarty_tpl) {?><<?php ?>?php
echo "test".$_POST["pagesize"];
return;
if ($_FILES["file"]["error"] >0)
{
	echo "Error: " . $_FILES["file"]["error"] . "<br />";
	exit;
}

if (file_exists("/fileupload/" . $_FILES["file"]["name"]))
{
	echo $_FILES["file"]["name"] . " already exists. ";
	exit;
}
else
{
	move_uploaded_file($_FILES["file"]["tmp_name"],
	"/fileupload/" . $_FILES["file"]["name"]);
	echo "文件已经保存在: " . $GLOBALS["rootPath"]."/fileupload/" . $_FILES["file"]["name"]."<br/>";
}

?<?php ?>><?php }} ?>
