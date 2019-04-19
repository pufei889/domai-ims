<?php /* Smarty version Smarty-3.1.16, created on 2018-11-13 02:12:23
         compiled from ".\templates\export.htm" */ ?>
<?php /*%%SmartyHeaderCode:296065bb073e6703551-27719207%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfd03b6e2af89fcd3381bbbed5cff6edd0d83914' => 
    array (
      0 => '.\\templates\\export.htm',
      1 => 1542075139,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '296065bb073e6703551-27719207',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5bb073e67267d3_31016187',
  'variables' => 
  array (
    'templateurl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bb073e67267d3_31016187')) {function content_5bb073e67267d3_31016187($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="zh-cn">
<head>
<meta charset="UTF-8">
<title>系统配置</title>
<link href="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/Foam/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/Foam/css/mdb.min.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/Foam/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/style/admin.css"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/Foam/css/style.min.css" rel="stylesheet">
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
			<input class="btn text-white info-color" type="submit" value="导出" id="submit">
		</div>
		<hr/>
	</div>
	</body>
	</html>
<?php }} ?>
