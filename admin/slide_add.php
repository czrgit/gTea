<?php require_once ('session.php');  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="css/table.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="kindeditor/themes/default/default.css" />
<script charset="utf-8" src="kindeditor/kindeditor-all-min.js"></script>
<script charset="utf-8" src="kindeditor/lang/zh_CN.js"></script>
<script>
KindEditor.ready(function (K){
	var editor=K.editor({
		allowFileManager:true
		});
K('#image3').click(function (){
		editor.loadPlugin('image',function(){
			editor.plugin.imageDialog({
			showRemote:false,
			imageUrl:K('#url3').val(),
			clickFn:function (url,title,width,height,border,align){
				K('#url3').val (url);
				editor.hideDialog();
				}
				});	
				});
				});
});

</script>
</head>

<body>
<form id="form1" name="form1" method="post" action="slide_add_pass.php">
<table width="100%" border="1" cellpadding="0" cellspacing="0">
<tr>
<td height="41" colspan="2" class="tt">添加幻灯</td>
</tr>
<tr>
<td width="10%" height="35"><span style="color:#F60">*</span>标题：</td>
<td width="90%" ><input name="title" type="text" id="title"  /></td>
</tr>
<tr>
<td height="31">链接：</td>
<td><input name="link" type="text" id="link"/></td>
</tr>
<tr>
<td height="35"><span style="color:#F60">*</span>缩略图：</td>
<td><input name="thumbnail" type="text" id="url3" value="" size="20" /><input type="button" id="image3" value="上传" /></td>
</tr>
<tr>
<td height="35"><span style="color:#F60">*</span>排序：</td>
<td><input name="orderid" type="text" id="orderid" value="" size="10" /></td>
</tr>
<tr>
<td height="35" colspan="2"><input type="submit" name="button" id="button" value="提交" /></td>
</tr>
</table>
</form>
</body>
</html>