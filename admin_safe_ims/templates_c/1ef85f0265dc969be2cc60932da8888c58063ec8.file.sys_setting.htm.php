<?php /* Smarty version Smarty-3.1.16, created on 2018-11-12 10:23:47
         compiled from ".\templates\sys_setting.htm" */ ?>
<?php /*%%SmartyHeaderCode:92785bb046bc8013d6-29992621%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ef85f0265dc969be2cc60932da8888c58063ec8' => 
    array (
      0 => '.\\templates\\sys_setting.htm',
      1 => 1542018220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92785bb046bc8013d6-29992621',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5bb046bc834054_79467966',
  'variables' => 
  array (
    'templateurl' => 0,
    'ipctl' => 0,
    'subinterval_cookie' => 0,
    'subinterval_ipaddr' => 0,
    'mulang' => 0,
    'cachetime' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bb046bc834054_79467966')) {function content_5bb046bc834054_79467966($_smarty_tpl) {?><!DOCTYPE HTML>
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
		<script>
			function setsize(){
				var obj=document.getElementById("sel_size");
				$.setcookie("listsize",obj.value,315360000);
				alert("保存成功!");
			}
			$.ready(function(){
				if(document.cookie){
					var setsize=$.getcookie("listsize");
					var select_list=document.getElementById("sel_size").getElementsByTagName('option');
					for(var i=0;i<select_list.length;i++){
						if(select_list[i].value==setsize){
							select_list[i].selected="selected";
						}
					}
				}
			})
		</script>
	</head>
	<body>	
		<div class="w90" >
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 mb-3">
						<div class="sing_count card">
							<div class="title"><span style="margin-left:10px">询盘展示</span></div>
							<div id="setting">
								在询盘列表中:每页显示<select id="sel_size"><option value="25">25条</option><option value="50">50条</option><option value="80">80条</option><option value="100">100条</option></select> 询盘
								<button class="btn btn-sm btn-info" onclick="setsize()">保存</button>
							</div>
							<hr/>
						</div>
					</div>
					
				</div>
			</div>			
		</div>
		
	<div class="w90" >
		<div class="container-fluid">
			<form action="" method="POST">
			<div class="row">
				<div class="col-12 mb-3">
					<div class="sing_count card">
						<div class="title"><span style="margin-left:10px">提交控制</span></div>
						<div id="setting">
							<select name="cfg['ipctl']">
								<?php if ($_smarty_tpl->tpl_vars['ipctl']->value=="开启") {?>
								<option value="true" selected="selected">开启</option><option value="false">关闭</option>
								<?php } else { ?>
								<option value="true">开启</option><option value="false" selected="selected">关闭</option>
								<?php }?>
							</select> 指定IP不能提交信息功能
							<button class="btn btn-primary btn-sm">保存</button>
						</div>
					</div>
				</div>
				
				<div class="col-12 mb-3">
					<div class="sing_count card">
						<div class="title"><span style="margin-left:10px">提交间隔控制</span></div>
						<div id="setting">
							同一用户提交信息后 <input name="cfg['subctl_bycookie']" value="<?php echo $_smarty_tpl->tpl_vars['subinterval_cookie']->value;?>
" maxlength="5" style="width:50px"/> 秒内不能提交信息(0表示表示关闭此项功能)
							<button class="btn btn-info btn-sm">保存</button>
						</div>
					</div>
				</div>
				
				<div class="col-12 mb-3">
					<div class="sing_count card">
						<div class="title"><span style="margin-left:10px">连续提交控制</span></div>
						<div id="setting">
							同一IP的用户连续提交超过 <input name="cfg['subctl_byip']" value="<?php echo $_smarty_tpl->tpl_vars['subinterval_ipaddr']->value;?>
" maxlength="3" style="width:50px"/> ，禁止其继续提交(0表示表示关闭此项功能,请设置为小于200的数字)
							<button class="btn btn-info btn-sm">保存</button>
						</div>
					</div>
				</div>
				
				<div class="col-12 mb-3">
					<div class="sing_count card">
						<div class="title"><span style="margin-left:10px">多语言提示</span></div>
						<div id="setting">
							用户提交信息后，<select name="cfg['Mulang']">
			
								<?php if ($_smarty_tpl->tpl_vars['mulang']->value=="开启") {?>
								<option value="true" selected="selected">开启</option><option value="false">关闭</option>
								<?php } else { ?>
								<option value="true">开启</option><option value="false" selected="selected">关闭</option>
								<?php }?>
			
							</select> 多语言的方式对用户提交结果进行提示
							<button class="btn btn-info btn-sm">保存</button>
						</div>
					</div>
				</div>
				
				<div class="col-12 mb-3">
					<div class="sing_count card">
						<div class="title"><span style="margin-left:10px">缓存控制</span></div>
						<div id="setting">
							设置提交结果提示页面的缓存时间为:<input name="cfg['cachetime']" value="<?php echo $_smarty_tpl->tpl_vars['cachetime']->value;?>
" maxlength="5" style="width:50px"/> 秒(0表示表示关闭此项功能)
							<button class="btn btn-info btn-sm">保存</button>
						</div>
					</div>
				</div>
				
				
			</div>
			</form>
		</div>
	</div>
	
	</body>
</html>
<?php }} ?>
