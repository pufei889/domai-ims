<?php /* Smarty version Smarty-3.1.16, created on 2018-11-13 02:20:05
         compiled from ".\templates\log_manage.htm" */ ?>
<?php /*%%SmartyHeaderCode:163645bb073d7baabd5-50501351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8635fa82c47e78b9d52576075a3a831225c0fcb0' => 
    array (
      0 => '.\\templates\\log_manage.htm',
      1 => 1542075599,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163645bb073d7baabd5-50501351',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5bb073d7bd5b54_02446586',
  'variables' => 
  array (
    'templateurl' => 0,
    'loglist' => 0,
    'filename' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bb073d7bd5b54_02446586')) {function content_5bb073d7bd5b54_02446586($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>系统日志管理</title>
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
<script src="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/script/my.js"></script>
</head>
<body>
<div class="sing_count">
<div class="title"><span style="margin-left:10px">查看系统日志</span></div>
<div id="setting">
	<form action="" method="post">
	日期:<select class="w20 browser-default custom-select" id="sel_size" name="date">
		<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_smarty_tpl->tpl_vars['filename'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['loglist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->_loop = true;
 $_smarty_tpl->tpl_vars['filename']->value = $_smarty_tpl->tpl_vars['d']->key;
?> 
		<option value="<?php echo $_smarty_tpl->tpl_vars['filename']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value;?>
</option>
		<?php } ?>
		</select>
		<input type="hidden" name="action"/>
	<button class="btn btn-danger" type="submit" onclick="document.getElementsByName('action')[0].value='cat'">查看</button>
	<button class="btn blue-grey lighten-5 text-black-50" type="submit" onclick="return confirm('您确定这样做?');document.getElementsByName('action')[0].value='rm'">删除</button>
	</form>
</div>
<hr/>
</div>
</body>
</html>
<?php }} ?>
