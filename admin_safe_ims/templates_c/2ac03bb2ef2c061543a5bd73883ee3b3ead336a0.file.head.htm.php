<?php /* Smarty version Smarty-3.1.16, created on 2018-08-16 09:02:57
         compiled from "./templates/head.htm" */ ?>
<?php /*%%SmartyHeaderCode:2045150105b74cd418e4ac2-60515067%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ac03bb2ef2c061543a5bd73883ee3b3ead336a0' => 
    array (
      0 => './templates/head.htm',
      1 => 1500980902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2045150105b74cd418e4ac2-60515067',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'templateurl' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5b74cd418f4cb2_81053070',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b74cd418f4cb2_81053070')) {function content_5b74cd418f4cb2_81053070($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="zh-cn">
<head>
<meta charset="UTF-8">
<title>哆麦外贸询盘管理系统</title>
<meta name="author" content="www.hitoy.org"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/style/main.css"/>
<link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/image/favicon.ico" />
<script src="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
script/my.js"></script>
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
<div class="head">
<a href="#" onclick="window.location.reload();return false;"><img src="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/image/managelog.gif" alt="Logo" id="logo"/></a>
<div class="wel">您好:<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
, 欢迎进入哆麦外贸询盘管理系统! <a href="./exit.php" class="logout">[注销]</a></div>
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
<!--<li><a href="./sys_setting.php" target="main">登陆权限</a></li>-->
</ul>
</div>
<?php }} ?>
