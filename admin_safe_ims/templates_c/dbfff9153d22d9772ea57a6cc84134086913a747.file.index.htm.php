<?php /* Smarty version Smarty-3.1.16, created on 2018-08-16 09:02:57
         compiled from "./templates/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:11097850525b74cd418a42e8-09655870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbfff9153d22d9772ea57a6cc84134086913a747' => 
    array (
      0 => './templates/index.htm',
      1 => 1500980902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11097850525b74cd418a42e8-09655870',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5b74cd418e0466_35384288',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b74cd418e0466_35384288')) {function content_5b74cd418e0466_35384288($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="leftnav">
	<iframe src="./left_nav.html" name="leftnav" frameborder="0" scrolling="yes"></iframe>
</div>
<div id="main">
<iframe src="./index_body.php" name="main" frameborder="0" scrolling="yes"></iframe>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
