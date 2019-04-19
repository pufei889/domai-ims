<?php /* Smarty version Smarty-3.1.16, created on 2019-04-19 03:20:17
         compiled from ".\templates\head.htm" */ ?>
<?php /*%%SmartyHeaderCode:191865bb0440185efd0-17659066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb3561945c4a0adffdf05851e6db3c3a29de9dbb' => 
    array (
      0 => '.\\templates\\head.htm',
      1 => 1555643888,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191865bb0440185efd0-17659066',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5bb0440186ab50_83417492',
  'variables' => 
  array (
    'templateurl' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bb0440186ab50_83417492')) {function content_5bb0440186ab50_83417492($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="zh-cn">
<head>
<meta charset="UTF-8">
<title>哆麦外贸询盘管理系统</title>
<meta name="author" content="www.hitoy.org"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/Foam/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/Foam/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/Foam/css/mdb.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/style/main.css"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/Foam/css/style.min.css" rel="stylesheet">
<link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/image/favicon.ico" />
<script src="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/script/my.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/Foam/js/jquery-3.3.1.min.js"></script>

<script type="text/javascript">var $f = $.noConflict(true);</script>
<script>
//系统通知
$.ready(function(){
    var xmlhttp;
	if(window.XMLHttpRequest){
		xmlhttp=new XMLHttpRequest();
	}else if(window.ActiveXObject){
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
    setInterval(function(){
        xmlhttp.open("GET","./notification.php?ignore="+(localStorage.getItem('ignore')||"0")+"&t="+Math.random(),true);
        xmlhttp.send();
        xmlhttp.onreadystatechange=function(){
            if(xmlhttp.readyState==4 && xmlhttp.status==200){
                var resulte=eval(xmlhttp.responseText);
                for(var i in resulte){
                    var id  = resulte[i].id;
                    var name = resulte[i].name;
                    var tel = resulte[i].tel||'未知';
                    var product = resulte[i].product||'未知';
                    localStorage.setItem('ignore',id);
                    $.notification("有新的客户询盘，请注意!","客户姓名:"+name+" 电话:"+tel+" 需求产品:"+product,300000,function(){});
                }
            }
        }
    },2000);
});
</script>
</head>
<body>
<div class="head z-depth-1">
	<div class="container-fluid">
		<div class="row">
			<div class="col-6">
				<div class="logos py-3">
					<a href="#" onclick="window.location.reload();return false;">
					哆麦 | DoMai
					</a>
				</div>
				
					<!--<img src="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/image/managelog.gif" alt="Logo" id="logo"/></a>-->
			</div>
			<div class="col-6">
				<div class="float-right py-3 users">
					您好:<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
, 欢迎进入哆麦外贸询盘管理系统! <a href="./exit.php" class="logout">[注销]</a>
				</div>
			</div>
		</div>
	</div>
	
<!--	
<a href="#" onclick="window.location.reload();return false;"><img src="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/image/managelog.gif" alt="Logo" id="logo"/></a>
<div class="wel">您好:<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
, 欢迎进入哆麦外贸询盘管理系统! <a href="./exit.php" class="logout">[注销]</a>
	
</div>
<div class="menu">
	
<ul class="nav">
<li class="selected" onclick="$.selectnav(this,'selected');window.main.location='./index_body.php';">首 页</li>
<li onclick="$.selectnav(this,'selected');window.main.location='./sys_setting.php';">系统配置</li>
<li onclick="$.selectnav(this,'selected');window.main.location='./msg_list.php';">信息管理</li>
<li onclick="$.selectnav(this,'selected');window.main.location='./user_list.php';">用户管理</li>
</ul>
<div class="easyop" onmouseover="$.submenushow('submenu')">快捷操作</div>
<ul class="easymenu" id="submenu" onmouseout="$.submenuhide(event,this)">
<li><a href="./recycle.php" target="main">回收站</a></li>
<li><a href="./user_do.php?action=add" target="main">添加用户</a></li>
<li><a href="./msg_list.php" target="main">信息管理</a></li>
<li><a href="./sys_setting.php" target="main">登陆权限</a></li>
</ul>
</div>-->

</div>
<?php }} ?>
