<?php  
require_once('session.php');
require_once('../inc/conni.php');
$sql="SELECT * FROM config";
$result=mysqli_query($conn,$sql);
$rs=mysqli_fetch_array($result);
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
	var editor=K.create('textarea[id="content"]',{
		allowFileManager:true
		});
});
KindEditor.ready(function (K){
	var editor=K.editor({
		allowFileManager:true
		});
	K('#image3').click(function (){
		editor.loadPlugin('image',function(){
			editor.plugin.imageDialog({
			showRemote:false,
			imageUrl:K('#site_logo').val(),
			clickFn:function (url,title,width,height,border,align){
				K('#site_logo').val (url);
				editor.hideDialog();
				}
				});	
				});
				});
K('#image4').click(function(){
	editor.loadPlugin('image',function (){
	editor.plugin.imageDialog({
	showRemote:false,
	imageUrl:K('#company_ewm').val(),
		clickFn:function (url,title,width,height,border,align){
			K('#company_ewm').val (url);
			editor.hideDialog();
		}
	});
	});
});
});
</script>
</head>

<body>
<form id="form1" name="form1" method="post" action="config.php?act=save">
<table width="100%" border="1" cellpadding="0" cellspacing="0">
<tr>
<td height="35" colspan="3" class="tt">网站基础配置</td>
</tr>
<tr>
<td width="16%" height="33">网站标题：</td>
<td colspan="2"><label for="site_title"></label>
<input name="site_title" type="text" id="site_title" value="<?php echo $rs['site_title'];?>" size="40" /></td>
</tr>
<tr>
<td height="33">网站logo</td>
<td colspan="2"><input name="site_logo" type="text" id="site_logo" value="<?php echo $rs['site_logo'];?>" size="40" />
<input type="button" id="image3" value="上传" /></td>
</tr>
<tr>
<td height="33">公司二维码</td>
<td colspan="2"><input name="company_ewm" type="text" id="company_ewm" value="<?php echo $rs['company_ewm'];?>" size="40" />
<input type="button" id="image4" value="上传" /></td>
</tr>
<tr>
<td height="33">网站地址：</td>
<td width="53%"><input name="site_url" type="text" id="site_url" value="<?php echo $rs['site_url'];?>" size="40" /></td>
</tr>
<tr>
<td height="64">网站关键字：</td>
<td><textarea name="site_keywords" cols="60" rows="3" id="site_keywords"><?php echo $rs['site_keywords']?></textarea></td>
</tr>
<tr>
<td height="61">网站描述：</td>
<td><textarea name="site_description" cols="60" rows="3" id="site_description"><?php echo $rs['site_description']?></textarea></td>
</tr>
<tr>
<td height="62">底部版权信息（支持html标记）：</td>
<td colspan="2"><textarea id="content" style="width:800px; height:300px; visibility:hidden;" name="site_copyright" cols="60" rows="3" ><?php echo $rs['site_copyright']?></textarea></td>
</tr>
<tr>
<td height="32">公司名称：</td>
<td colspan="2"><label for="company_name"></label>
<input name="company_name" type="text" id="company_name" value="<?php echo $rs['company_name']?>" size="40" /></td>
</tr>
<tr>
<td height="31">联系电话：</td>
<td colspan="2"><input name="company_phone" type="text" id="company_phone" value="<?php echo $rs['company_phone']?>" size="40" /></td>
</tr>
<tr>
<td height="31">传真：</td>
<td colspan="2"><input name="company_fax" type="text" id="company_fax" value="<?php echo $rs['company_fax']?>" size="40" /></td>
</tr>
<tr>
<td height="28">电子邮箱：</td>
<td colspan="2"><input name="company_email" type="text" id="company_email" value="<?php echo $rs['company_email']?>" size="40" /></td>
</tr>
<tr>
<td height="28">微信</td>
<td colspan="2"><input name="company_weixin" type="text" id="company_weixin" value="<?php echo $rs['company_weixin']?>" size="40" /></td>
</tr>
<tr>
<td height="33">公司地址：</td>
<td colspan="2"><label for="company_address"></label>
<input name="company_address" type="text" id="company_address" value="<?php echo $rs['company_address']?>" size="80" /></td>
</tr>
<tr>
<td height="32" colspan="3"><input type="submit" name="Submit" value="修改" /></td>
</tr>
</table>
</form>


</body>
</html>
<?php
if(@$_GET['act']=="save"){
	mysqli_query($conn,
	"UPDATE config SET site_title='".$_POST['site_title']."',
	site_url='".$_POST['site_url']."',
	site_logo='".$_POST['site_logo']."',
	company_ewm='".$_POST['company_ewm']."',
	site_keywords='".$_POST['site_keywords']."',
	site_description='".$_POST['site_description']."',
	site_copyright='".$_POST['site_copyright']."',
	company_name='".$_POST['company_name']."',
	company_phone='".$_POST['company_phone']."',
	company_fax='".$_POST['company_fax']."',
	company_email='".$_POST['company_email']."',
	company_weixin='".$_POST['company_weixin']."',
	company_address='".$_POST['company_address']."'");
	echo "<script>alert('修改成功！');window.location.href='config.php';</script>";
	exit;
	}
mysqli_close($conn);
?>
