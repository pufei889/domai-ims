<?php /* Smarty version Smarty-3.1.16, created on 2019-04-19 03:20:17
         compiled from ".\templates\footer.htm" */ ?>
<?php /*%%SmartyHeaderCode:218275bb044018766d0-81167688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f7c6c09c6de45214a3a02d19fdf02fa3ed2b3f9' => 
    array (
      0 => '.\\templates\\footer.htm',
      1 => 1555643826,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '218275bb044018766d0-81167688',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5bb044018766d9_59265382',
  'variables' => 
  array (
    'templateurl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bb044018766d9_59265382')) {function content_5bb044018766d9_59265382($_smarty_tpl) {?><div class="footer">
	<div id="copy">哆麦外贸询盘管理系统</div>
	<div id="author">Author <a style="color: red;" href="https://www.hitoy.org/" rel="author" target="_blank">Hito</a> Desgin by <a href="//www.5zzu.com" target="_blank">Foam</a></div>
</div>



    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/Foam/js/popper.min.js"></script>

    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/Foam/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/Foam/js/mdb.min.js"></script>
	<script type="text/javascript">
		 $f(document).ready(function() {
		     $f(".tab li").click(function() {
		         $f(".tab li").eq($f(this).index()).addClass("selected").siblings().removeClass('selected');
		         //$("div").hide().eq($(this).index()).show();
		         //另一种方法: $("div").eq($(".tab li").index(this)).addClass("on").siblings().removeClass('on'); 
		
		     });
		 });
	</script>
	
	
	

	
</body>
</html>
<?php }} ?>
