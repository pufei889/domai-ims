<?php /* Smarty version Smarty-3.1.16, created on 2019-04-19 10:12:45
         compiled from ".\templates\msg_list.htm" */ ?>
<?php /*%%SmartyHeaderCode:143725bb046bd87e3d5-44312034%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab99ef7e2da104b767e4c9312a1d4e4062afb9ec' => 
    array (
      0 => '.\\templates\\msg_list.htm',
      1 => 1555668756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143725bb046bd87e3d5-44312034',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5bb046bd8c8753_28194924',
  'variables' => 
  array (
    'templateurl' => 0,
    'msg_list' => 0,
    'ulv' => 0,
    'pageinfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bb046bd8c8753_28194924')) {function content_5bb046bd8c8753_28194924($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="zh-cn">
<head>
<meta charset="UTF-8">
<title>询盘管理</title>
<link href="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/Foam/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/Foam/css/mdb.min.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/Foam/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/style/admin.css"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/Foam/css/modal-box.min.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/Foam/css/style.min.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/Foam/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/Foam/js/modal-box.min.js"></script>
<!--<script src="<?php echo $_smarty_tpl->tpl_vars['templateurl']->value;?>
/script/my.js"></script>-->



<script>
var i=0;
function selectall(){
	var obj=document.getElementsByTagName("table")[0].getElementsByTagName('input');
	if(i%2==0){
		for(var j=1;j<obj.length;j++){
			obj[j].checked="checked";
		}
	}else{
		for(var j=1;j<obj.length;j++){
			obj[j].checked="";
		}
	}
	i++;
}
function selectno(){
	var obj=document.getElementsByTagName("table")[0].getElementsByTagName('input');
	for(var j=1;j<obj.length;j++){
		if(obj[j].checked){
			obj[j].checked=false;
		}else{
			obj[j].checked="checked";
		}
	}
}
//ajax 处理信息
function deal_msg(action){
	var obj=document.getElementsByTagName("table")[0].getElementsByTagName('input');
	var msg_list=new Array();
	var i=0;
	for(var j=1;j<obj.length;j++){
		if(obj[j].checked){
			msg_list[i]=obj[j].value;
			i++;
		}
	}
	if(msg_list==""){
		alert("请选择!");
		return false;
	}
	var xmlhttp;
	if(window.XMLHttpRequest){
		xmlhttp=new XMLHttpRequest();
	}else if(window.ActiveXObject){
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
		xmlhttp.open("POST","./msg.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send("action="+action+"&id="+msg_list);
		xmlhttp.onreadystatechange=function(){
			if(xmlhttp.readyState==4 && xmlhttp.status==200){
				window.location.reload();
		}
	}
}

	//点击列表到达信息页
	/*
	$.ready(function(){
		var obj=document.getElementsByTagName("table")[0].getElementsByTagName("tr");
		var boxMd = document.getElementById("my-modal");
		console.log(obj);
		(function(){
			for(var i=1;i<obj.length-2;i++){
				obj[i].onclick=function(){
					var id=this.getElementsByTagName("input")[0].value;
					//window.location="./msg.php?id="+id;<iframe src='./msg.php?id="+id+"></iframe>
					
					
					boxMd.innerHTML = "123456";
				}
			}
		})(i)
			//取消table内input点击的事件冒泡
			var inputobj=document.getElementsByTagName("table")[0].getElementsByTagName("input");
		for(var i=1;i<inputobj.length;i++){
			inputobj[i].onclick=function(e){
				if(e && e.stopPropagation){
					e.stopPropagation();
				}else{
					window.event.cancelBubble = true;
				}
			}
		}
	})
*/
</script>
</head>
<body style="padding-bottom:50px;">
<div class="msg_admin">
<div class="title"><a href="javascript:window.top.location.reload()">首页</a> &gt; 信息管理</div>
<div class="query">
<form action="" method="get">
	<select name="query" class="browser-default custom-select">
		<option value="all" selected="selected">所有记录</option>
		<option value="no_deal">未处理</option>
		<option value="dealed">已处理</option>
		<option value="right">有效信息</option>
		<option value="wrong">无效信息</option>
		<option value="repeat">重复信息</option>
		
	</select>
	<input class="btn btn-info btn-sm" type="submit" value="查询"/>
</div>
<table class="msg_list table-hover">
<tr><td><input type="checkbox" value="0" onclick="selectall()"/></td><td>ID</td><td>客户姓名</td><td>客户邮箱</td><td>国家</td><td>产品</td><td>提交时间</td><td>分组</td><td>状态</td></tr>

<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['list'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['list']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['name'] = 'list';
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['msg_list']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total']);
?> 
<tr id="<?php echo $_smarty_tpl->tpl_vars['msg_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
" onclick="capture(this)" class="message_list open-modal"  >
	<td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['msg_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
"/></td>
	<td><?php echo $_smarty_tpl->tpl_vars['msg_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['msg_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['name'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['msg_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['email'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['msg_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['country'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['msg_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['product'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['msg_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['subtime'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['msg_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['team'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['msg_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['msg_status'];?>
</td>
</tr>
<?php endfor; endif; ?>

<tr>
	<td colspan="9" class="selectbar">选择:<a href="javascript:selectall();">全选</a><a href="javascript:selectno();">反选</a>
</tr>
<tr>
	<td colspan="9" class="deal">
		<?php if ($_smarty_tpl->tpl_vars['ulv']->value==1) {?><button onclick="deal_msg('del');return false;">删除</button><?php }?>
		<button onclick="deal_msg('wrong');return false;">标记为无效</button>
		<button onclick="deal_msg('repeat');return false;">标记为重复</button>
<div id="page">
	<?php echo $_smarty_tpl->tpl_vars['pageinfo']->value;?>

</div></td>
</tr>
</table>


<div id="my-modal">
	
	
	
</div>

<script type="text/javascript">

    $(document).ready(function() {
        $("#my-modal").wgModal({
            triggerElement: '.open-modal',
        });
    });
</script>

<script>
	function capture(data){
　　	$('#my-modal>.wg-content').html("<iframe src=\"./msg.php?id="+data.id+"\" width=\"100%\" height=\"650px\" frameborder=\"0\" scrolling=\"yes\"></iframe>");
	}
</script>






	
	
</body>
</html>
<?php }} ?>
