<?php
require_once('session.php');
require_once('../inc/conni.php');
$sql="select * from slide where id='".$_GET['id']."'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
?>
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
var editor;
KindEditor.ready(function (K){
	var editor=K.editor({
		allowFileManager:true
		});
K('#image3').click(function (){
		editor.loadPlugin('image',function(){
			editor.plugin.imageDialog({
			showRemote:true,
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
<form id="form1" name="form1" method="post" action="slide_modify_pass.php?id=<?php echo $row['id']?>">
<table width="100%" border="1" cellpadding="0" cellspacing="0">
<tr>
<td colspan="2" class="tt">修改焦点幻灯</td>
</tr>
<tr>
<td width="14%" height="35"><span style="color:#F60;">*</span>标题：</td>
<td width="86%" ><input name="title" type="text" id="title" value="<?php echo $row['title']?>"/></td>
</tr>
<tr>
<td height="35">链接：</td>
<td><input name="link" type="text" id="link" value="<?php echo $row['link']?>" /></td>
</tr>
<tr>
<td height="35"><span style="color:#F60;">*</span>缩略图</td>
<td><input name="thumbnail" type="text" id="url3" value="<?php echo $row['thumbnail']?>" />
<input type="button" id="image3" value="上传" /></td>
</tr>
<tr>
<td height="35"><span style="color:#F60;">*</span>排序：</td>
<td><input name="orderid" type="text" id="orderid" value="<?php echo $row['orderid']?>" /></td>
</tr>
<tr>
<td height="35" colspan="2"><input type="submit" name="Submit" value="提交" />
</td>
</tr>
</table>
</form>
</body>
</html>