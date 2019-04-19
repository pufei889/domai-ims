<?php /* Smarty version Smarty-3.1.16, created on 2018-08-16 09:03:08
         compiled from "./templates/export.htm" */ ?>
<?php /*%%SmartyHeaderCode:15026282215b74cd4ce94066-17335624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '892db897634967263d45ca066058a2550b273f94' => 
    array (
      0 => './templates/export.htm',
      1 => 1500980902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15026282215b74cd4ce94066-17335624',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'templateurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5b74cd4ceaa9d4_64998772',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b74cd4ceaa9d4_64998772')) {function content_5b74cd4ceaa9d4_64998772($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="zh-cn">
<head>
<meta charset="UTF-8">
<title>系统配置</title>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/style/admin.css"/>
<!--<script src="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/script/my.js"></script>-->
</head>
<body>	
<div class="sing_count">
	<div class="title"><span style="margin-left:10px">导出无效信息</span></div>
	<div id="setting">
		<form action="" method="post" class="export">
			<label for="stime">开始时间:</label><input type="date" name="stime" id="stime">
			<label for="etime">结束时间:</label><input type="date" name="etime" id="etime">
			<input type="submit" value="导出" id="submit">
		</div>
		<hr/>
	</div>
	</body>
	</html>
<?php }} ?>
