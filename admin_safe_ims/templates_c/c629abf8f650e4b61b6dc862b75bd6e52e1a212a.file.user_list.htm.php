<?php /* Smarty version Smarty-3.1.16, created on 2018-11-13 01:56:05
         compiled from ".\templates\user_list.htm" */ ?>
<?php /*%%SmartyHeaderCode:6715bb046bfa00f51-62464162%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c629abf8f650e4b61b6dc862b75bd6e52e1a212a' => 
    array (
      0 => '.\\templates\\user_list.htm',
      1 => 1542074158,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6715bb046bfa00f51-62464162',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5bb046bfa3f754_66051527',
  'variables' => 
  array (
    'templateurl' => 0,
    'userlist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bb046bfa3f754_66051527')) {function content_5bb046bfa3f754_66051527($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="zh-cn">
<head>
<meta charset="UTF-8">
<title>询盘管理</title>
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
<div class="user_admin">
<div class="title"><a href="javascript:window.top.location.reload()">首页</a> > 用户管理</div>
<table class="userinfo table-hover">
<tr><td>ID</td><td>用户名</td><td>中文名</td><td>上次登陆时间</td><td>级别</td><td>当前状态</td><td>操作</td></tr>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ulist'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ulist']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ulist']['name'] = 'ulist';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ulist']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['userlist']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ulist']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ulist']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ulist']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ulist']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ulist']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ulist']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ulist']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ulist']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ulist']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ulist']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ulist']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ulist']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ulist']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ulist']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ulist']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ulist']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ulist']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ulist']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ulist']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ulist']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ulist']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ulist']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ulist']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ulist']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ulist']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ulist']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ulist']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ulist']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ulist']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ulist']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ulist']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ulist']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ulist']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ulist']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ulist']['total']);
?> 
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['userlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ulist']['index']]['id'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['userlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ulist']['index']]['username'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['userlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ulist']['index']]['nickname'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['userlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ulist']['index']]['lastlogin'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['userlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ulist']['index']]['userleve'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['userlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ulist']['index']]['current_stat'];?>
</td>
		<td><a href="./user_do.php?action=del&id=<?php echo $_smarty_tpl->tpl_vars['userlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ulist']['index']]['id'];?>
" onclick="return confirm('您确定这样做?')">删除</a>  <a href="user_do.php?action=change&id=<?php echo $_smarty_tpl->tpl_vars['userlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ulist']['index']]['id'];?>
">更改</a></td>
	</tr>
<?php endfor; endif; ?>
</table>
</div>
</body>
</html>
<?php }} ?>
