<?php /* Smarty version Smarty-3.1.16, created on 2018-11-13 02:08:37
         compiled from ".\templates\user_add.htm" */ ?>
<?php /*%%SmartyHeaderCode:303345bb048cf507850-67167078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f1021ed81f5807f7c9b09c7fca008d9d5abe2e1' => 
    array (
      0 => '.\\templates\\user_add.htm',
      1 => 1542074913,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '303345bb048cf507850-67167078',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5bb048cf52aad0_01501794',
  'variables' => 
  array (
    'templateurl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bb048cf52aad0_01501794')) {function content_5bb048cf52aad0_01501794($_smarty_tpl) {?><!DOCTYPE HTML>
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
	var uname=document.getElementsByName("uname")[0].value;;
	var password=document.getElementsByName("password")[0].value;
	var password_ag=document.getElementsByName("password_ag")[0].value;
	if(uname==""){
		alert("用户名为空!");
		return false;
	}else if(password==""){
		alert("密码为空!");
		return false;
	}else if(password.length<5){
		alert("密码过于简单!");
		return false;
	}else if(password!=password_ag){
		alert("两次输入密码不相同!");
		return false;
	}
}
function input_rand_password(){
	var mypassword=$.getpasswd('10');
	document.getElementsByName("password")[0].value=mypassword;
	document.getElementsByName("password_ag")[0].value=mypassword;
	document.getElementById("random_passwd_show").value=mypassword;
	return false;
}
</script>
</head>
<body>
<div class="user_admin">
<div class="title"><a href="javascript:window.top.location.reload()">首页</a> > 用户管理</div>	
<table class="user_mod">
<form action="" method="post" onsubmit="return checkinput()">
<tr><td>用户名:</td><td><input class="form-control" type="text" name="uname"  value=""/></td></td>
<tr><td>真实姓名:</td><td><input class="form-control" type="text" name="realname"/></td></tr>
<tr><td>用户级别:</td><td><select class="browser-default custom-select" name="ulv"><option value="9">操作员</option><option value="1">管理员</option></select></td></tr>
<tr><td>输入密码:</td><td><input class="form-control" type="password" name="password"/></td></tr>
<tr><td>再次输入密码:</td><td><input class="form-control" type="password" name="password_ag"/></td></tr>
<tr><td>生成密码:<button class="btn deep-orange darken-3" onclick="return input_rand_password();">生成</button></td><td><input class="form-control" type="text" id="random_passwd_show"/></td></tr>
<tr><td colspan="2"><input class="btn btn-danger" type="submit" value="保存" class="butn"/><input class="btn btn-primary" type="reset" value="返回" class="butn" onclick="window.history.go(-1);"/></td></tr>
</form>
</table>
</div>
</body>
</html>
<?php }} ?>
