<?php /* Smarty version Smarty-3.1.16, created on 2018-11-12 10:04:11
         compiled from ".\templates\index_body.htm" */ ?>
<?php /*%%SmartyHeaderCode:265605bb04402a28059-96204687%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '512484af958eec2b3d0c404dec867c9d73999b6a' => 
    array (
      0 => '.\\templates\\index_body.htm',
      1 => 1542017046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '265605bb04402a28059-96204687',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5bb04402a5acd7_50035370',
  'variables' => 
  array (
    'templateurl' => 0,
    'systemtime' => 0,
    'lastlogintime' => 0,
    'logincount' => 0,
    'lastloginaddr' => 0,
    'loginaddr' => 0,
    'yesterdayin' => 0,
    'todayin' => 0,
    'untreatedin' => 0,
    'totalin' => 0,
    'servername' => 0,
    'serverip' => 0,
    'phpversion' => 0,
    'webserver' => 0,
    'mysqlversion' => 0,
    'cookiesupport' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bb04402a5acd7_50035370')) {function content_5bb04402a5acd7_50035370($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="zh-cn">
<head>
<meta charset="UTF-8">
<title>信息系统首页</title>
<link href="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/Foam/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/Foam/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/Foam/css/mdb.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/style/admin.css"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/Foam/css/style.min.css" rel="stylesheet">
<script src="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/script/my.js"></script>
<script>
$.ready(function(){
	var xmlhttp;
	if(window.XMLHttpRequest){
		xmlhttp=new XMLHttpRequest();
	}else if(window.ActiveXObject){
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.open("GET","./tools/update.php?t="+Math.random(),true);
	xmlhttp.send();
	xmlhttp.onreadystatechange=function(){
		if(xmlhttp.readyState==4 && xmlhttp.status==200){
			var resulte=xmlhttp.responseText;
			document.getElementById("latestversion").innerHTML=resulte;
		}
	}
})
	</script>
</head>
<body>
<div class="time">
	本地时间: <script>document.write($.nowtime);</script> 系统时间: <?php echo $_smarty_tpl->tpl_vars['systemtime']->value;?>

</div>
<div class="userloginfo">
	<img src="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/image/brodecast.png"/><p>您上次登陆时间为:<span><?php echo $_smarty_tpl->tpl_vars['lastlogintime']->value;?>
</span>, 这是您第<span><?php echo $_smarty_tpl->tpl_vars['logincount']->value;?>
</span>次登陆本系统<br/>
	上次登陆IP: <span><?php echo $_smarty_tpl->tpl_vars['lastloginaddr']->value;?>
</span>, 本次登陆IP: <span><?php echo $_smarty_tpl->tpl_vars['loginaddr']->value;?>
</span><br/>
	为了系统信息安全，请不要在网吧等公共电脑上使用自动登陆!</p>
	<div class="close" title="关闭提示" onclick="this.parentNode.parentNode.removeChild(this.parentNode)">X</div>
</div>
<div class="msginfo card">
<div class="title card-title"><span style="margin-left:10px">询盘简报</span></div>
<table class="info">
	<tr>
		<td><strong style="color:#646464">昨日总询盘:</strong></td>
		<td><?php echo $_smarty_tpl->tpl_vars['yesterdayin']->value;?>
条 <a href="./msg_list.php">立即查看</a></td>
		<td><strong style="color:#646464">今日总询盘:</strong></td><td><?php echo $_smarty_tpl->tpl_vars['todayin']->value;?>
条 <a href="./msg_list.php">立即查看</a></td>
	</tr>
	<tr>
		<td><strong style="color:#646464">未处理询盘:</strong></td>
		<td><?php echo $_smarty_tpl->tpl_vars['untreatedin']->value;?>
条 <a href="./msg_list.php?query=no_deal">立即查看</a></td>
		<td><strong style="color:#646464">历史总询盘:</strong></td><td><?php echo $_smarty_tpl->tpl_vars['totalin']->value;?>
条 <a href="./msg_list.php">立即查看</a></td>
	</tr>
</table>
</div>
<div class="sysinfo card">
<div class="title"><span style="margin-left:10px">系统信息</span></div>
<table>
	<tr><td><strong style="color:#646464">服务器系统:</strong></td><td><?php echo $_smarty_tpl->tpl_vars['servername']->value;?>
</td></tr>
	<tr><td><strong style="color:#646464">服务器IP:</strong></td><td><?php echo $_smarty_tpl->tpl_vars['serverip']->value;?>
</td></tr>
	<tr><td><strong style="color:#646464">PHP版本:</strong></td><td><?php echo $_smarty_tpl->tpl_vars['phpversion']->value;?>
</td></tr>
	<tr><td><strong style="color:#646464">Web服务器:</strong></td><td><?php echo $_smarty_tpl->tpl_vars['webserver']->value;?>
</td></tr>
	<tr><td><strong style="color:#646464">Mysql服务器:</strong></td><td><?php echo $_smarty_tpl->tpl_vars['mysqlversion']->value;?>
</td></tr>
	<tr><td><strong style="color:#646464">客户端Cookie支持:</strong></td><td><?php echo $_smarty_tpl->tpl_vars['cookiesupport']->value;?>
</td></tr>
</table>
</div>
<div class="sysupdate card">
<div class="title"><span style="margin-left:10px">系统版本更新</span></div>
<table>
<tr><td><strong style="color:#646464">系统名称:</strong></td><td>哆麦外贸询盘管理系统</td></tr>
<tr><td><strong style="color:#646464">许可协议:</strong></td><td>MIT</td></tr>
<tr><td><strong style="color:#646464">系统要求:</strong></td><td>PHP5.2+, Mysql5.0+, 推荐使用Linux+Nginx</td></tr>
<tr><td><strong style="color:#646464">当前版本:</strong></td><td>V2.1.1</td></tr>
<tr><td><strong style="color:#646464">最新版本:</strong></td><td id="latestversion">正在检查...</td></tr>
<tr><td><strong style="color:#646464">系统说明:</strong></td><td><a href="../readme.md">点击这里</a></td></tr>
</table>
</div>
<div class="foot">Copyright &copy; 2016 Hito</div>
</body>
</html>
<?php }} ?>
