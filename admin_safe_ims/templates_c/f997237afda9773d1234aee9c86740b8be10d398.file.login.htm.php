<?php /* Smarty version Smarty-3.1.16, created on 2018-11-13 02:48:14
         compiled from ".\templates\login.htm" */ ?>
<?php /*%%SmartyHeaderCode:313165bb043fa9f9253-27628406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f997237afda9773d1234aee9c86740b8be10d398' => 
    array (
      0 => '.\\templates\\login.htm',
      1 => 1542077293,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '313165bb043fa9f9253-27628406',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5bb043faa18651_31770392',
  'variables' => 
  array (
    'templateurl' => 0,
    'errormsg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bb043faa18651_31770392')) {function content_5bb043faa18651_31770392($_smarty_tpl) {?><!DOCTYPE>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
<title>哆麦外贸询盘管理系统</title>
<meta name="author" content="www.hitoy.org"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/style/login.css"/>
</head>
<body>
<div id="particles-js"></div>
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
<div class="help" style="color: #fff;">为保证良好的操作效果，请使用<a href="https://www.google.com/intl/en/chrome/browser/" target="_blank" style="color:red">Chrome</a>等高级浏览器</div>

<script src="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/Foam/js/particles.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/Foam/js/app.js"></script>
</body>
</html>
<?php }} ?>
