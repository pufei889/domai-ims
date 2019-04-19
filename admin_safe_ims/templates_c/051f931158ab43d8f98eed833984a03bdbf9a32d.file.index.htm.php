<?php /* Smarty version Smarty-3.1.16, created on 2018-11-12 07:28:05
         compiled from ".\templates\index.htm" */ ?>
<?php /*%%SmartyHeaderCode:240615bb04401834059-71729515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '051f931158ab43d8f98eed833984a03bdbf9a32d' => 
    array (
      0 => '.\\templates\\index.htm',
      1 => 1542007682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '240615bb04401834059-71729515',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5bb04401853452_64409990',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bb04401853452_64409990')) {function content_5bb04401853452_64409990($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="leftnav">
	<?php echo $_smarty_tpl->getSubTemplate ("left_side.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<!--<iframe src="./left_nav.html" name="leftnav" frameborder="0" scrolling="yes"></iframe>-->
</div>
<div id="main">
<iframe src="./index_body.php" name="main" frameborder="0" scrolling="yes"></iframe>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
