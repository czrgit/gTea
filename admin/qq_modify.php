<?php

require_once('session.php');
require_once('../inc/conni.php');
$sql="SELECT * FROM qq WHERE id='".$_GET['id']."'";
$result=mysqli_query ($conn,$sql);
$row=mysqli_fetch_array($result);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="css/table.css" rel="stylesheet" type="text/css" />
</head>
<body>
<form name="form1" id="form1" action="qq_modify_pass.php?id=<?=$row['id']?>" method="post">
<table width="100%" border="1" cellspacing="0" cellpadding="0">
<tr>
<td height="41" colspan="2" class="tt">修改QQ客服</td>
</tr>
<tr>
<td width="13%" height="35">标题：</td>
<td width="87%"><input name="title" type="text" id="title" value="<?=$row['title']?>" /></td>
</tr>
<tr>
<td height="35"><span style="color:#F60">*</span>号码：</td>
<td><input name="qqnum" type="text" id="qqnum" value="<?=$row['qqnum']?>" /></td>
</tr>
<tr>
<td height="35">客服姓名：</td>
<td><input name="truename" type="text" id="url3"  value="<?=$row['truename']?>" size="20" /></td>
</tr>
<tr>
<td height="35" colspan="2"><input type="submit" name="button" id="button" value="提交" /></td>
</tr>
</table>
</form>
</body>
</html>
<?php
mysqli_close($conn);
?>