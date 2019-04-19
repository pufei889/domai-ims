<?php /* Smarty version Smarty-3.1.16, created on 2018-08-16 09:00:18
         compiled from "./templates/login.htm" */ ?>
<?php /*%%SmartyHeaderCode:20427257275b74cca2866928-59643036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b10496ace7d27f98dc374442c24024fb9c6d4f82' => 
    array (
      0 => './templates/login.htm',
      1 => 1500980902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20427257275b74cca2866928-59643036',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'templateurl' => 0,
    'errormsg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5b74cca287b5f2_60861651',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b74cca287b5f2_60861651')) {function content_5b74cca287b5f2_60861651($_smarty_tpl) {?><!DOCTYPE>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
<title>哆麦外贸询盘管理系统</title>
<meta name="author" content="www.hitoy.org"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/style/login.css"/>
</head>
<body>
<div class="login">
    <div class="note">哆麦 · 外贸询盘管理系统</div>
    <form action="./login.php" method="post">
        <input type="text" name="username"/>
        <input type="password" name="password"/>
        <div class="reset"><?php echo $_smarty_tpl->tpl_vars['errormsg']->value;?>
</div>
        <input type="submit" value="提交"/>
    </form>
</div>
<div class="help">为保证良好的操作效果，请使用<a href="https://www.google.com/intl/en/chrome/browser/" target="_blank" style="color:red">Chrome</a>等高级浏览器</div>
</body>
</html>
<?php }} ?>
