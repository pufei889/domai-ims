<?php /* Smarty version Smarty-3.1.16, created on 2018-11-12 10:24:52
         compiled from ".\templates\left_side.htm" */ ?>
<?php /*%%SmartyHeaderCode:212625be92b859d17a0-82435992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48a3115d57be885fe66a21df1ff9d8a2777169f8' => 
    array (
      0 => '.\\templates\\left_side.htm',
      1 => 1542018289,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212625be92b859d17a0-82435992',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5be92b859d2bc1_56964276',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5be92b859d2bc1_56964276')) {function content_5be92b859d2bc1_56964276($_smarty_tpl) {?><div class="left_nav">
	
<ul class="tab">
	<li class="selected py-2 pl-4 text-white" onclick="window.main.location='./index_body.php';"><i class="fa fa-home"></i> 首 页</li>

	<li class="py-2 pl-4 text-white" onclick="window.main.location='./msg_list.php';"><i class="fa fa-telegram"></i> 信息管理</li>
	<li class="py-2 pl-4 text-white" onclick="window.main.location='./user_list.php';"><i class="fa fa-users"></i> 用户管理</li>
	<li class="py-2 pl-4 text-white" onclick="window.main.location='./sys_setting.php';"><i class="fa fa-cog"></i> 系统配置</li>
	<li  class="py-2 pl-4"><a href="./user_list.php" target="main"><i class="fa fa-address-book"></i> 更改密码</a></li>
	<li class="py-2 pl-4"><a href="./user_do.php?action=add" target="main"><i class="fa fa-address-card"></i> 添加用户</a></li>
	<li class="py-2 pl-4"><a href="./export.php" target="main"><i class="fa fa-info-circle"></i> 信息导出</a></li>
	<li class="py-2 pl-4"><a href="./log_manage.php" target="main"><i class="fa fa-pencil-square"></i> 日志管理</a></li>
	<li class="py-2 pl-4"><a href="./clear_cache.php" target="main"><i class="fa fa-recycle"></i> 清理缓存</a></li>
	<li class="py-2 pl-4"><a href="./ip_ctrl.php" target="main"><i class="fa fa-paper-plane"></i> 提交控制</a></li>
	<!--<li><img src="./image/arrow.png"/><a href="#" target="main">语言管理</a></li>-->
	<li class="py-2 pl-4"><a href="./recycle.php" target="main"><i class="fa fa-recycle"></i>  回收站管理</a></li>
</ul>
</div>	<?php }} ?>
