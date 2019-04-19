<?php /* Smarty version Smarty-3.1.16, created on 2018-11-13 02:28:29
         compiled from ".\templates\acl.htm" */ ?>
<?php /*%%SmartyHeaderCode:204055bb073dbba2ed3-57787789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01a5606647df1235597aa2aa306603da858485c7' => 
    array (
      0 => '.\\templates\\acl.htm',
      1 => 1542075988,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204055bb073dbba2ed3-57787789',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5bb073dbbc6157_32451061',
  'variables' => 
  array (
    'templateurl' => 0,
    'denylist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bb073dbbc6157_32451061')) {function content_5bb073dbbc6157_32451061($_smarty_tpl) {?><!DOCTYPE HTML>
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
<script src="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/script/my.js"></script>
<style>

.deny {width:350px;max-width:350px;height:380px;max-height:380px;margin-top:5px}

</style>
</head>
<body>	
<div class="sing_count">
		<div class="title"><span style="margin-left:10px">提交控制</span></div>
		<div id="setting">
			在以下列表中的IP将不能提交信息到系统当中，这项功能能够有效固定IP的恶意提交，减少垃圾留言的产生.<br/>
			但供给者可能会利用不同IP或者伪造IP，所以请合理使用这项功能.<br/>
				<form action="" method="POST">
				<textarea class="deny form-control" name="denylist"><?php echo $_smarty_tpl->tpl_vars['denylist']->value;?>
</textarea>
				<button class="btn btn-primary" type="submit">保存</button>
				</form>
		</div>
		<hr/>
</div>
</body>
</html>

<?php }} ?>
