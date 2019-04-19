<?php /* Smarty version Smarty-3.1.16, created on 2018-11-13 02:02:36
         compiled from ".\templates\user_mod.htm" */ ?>
<?php /*%%SmartyHeaderCode:104975bb051296f3b50-79729357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01e3695cc76a863e155fec98cb1b654ab29efce6' => 
    array (
      0 => '.\\templates\\user_mod.htm',
      1 => 1542074541,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104975bb051296f3b50-79729357',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5bb05129716dd4_07135877',
  'variables' => 
  array (
    'templateurl' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bb05129716dd4_07135877')) {function content_5bb05129716dd4_07135877($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>修改用户</title>
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
<script>
function checkinput(){
	var password=document.getElementsByName("password")[0].value;
	var password_ag=document.getElementsByName("password_ag")[0].value;
	if(password==""){
		alert("输入为空!");
		return false;
	}else if(password.length<5){
		alert("密码过于简单!");
		return false;
	}else if(password!=password_ag){
		alert("两次输入密码不相同!");
		return false;
	}
}
</script>
</head>
<body>
<div class="user_admin">
<div class="title"><a href="javascript:window.top.location.reload()">首页</a> > 用户管理</div>	
<table class="user_mod">
<form action="" method="post" onsubmit="return checkinput()">
	<tr><td>用户名:</td><td><input class="form-control" type="text" name="uname" disabled="disabled" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
"/></td></td>
<tr><td>输入密码:</td><td><input class="form-control" type="password" name="password"/></td></tr>
<tr><td>再次输入密码:</td><td><input class="form-control" type="password" name="password_ag"/></td></tr>
<tr><td colspan="2"><input type="submit" value="保存" class="btn btn-danger"/><input type="reset" value="返回" class="btn btn-default" onclick="window.history.go(-1);"/></td></tr>
</form>
</table>
</div>
</body>
</html>
<?php }} ?>
