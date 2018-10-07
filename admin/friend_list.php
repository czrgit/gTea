<?php

require_once('session.php');
require_once('../inc/conni.php');
 //记录的总条数
$total_num=mysqli_num_rows(mysqli_query($conn,"select id from friend"));
//设置每页显示的记录数
$pagesize=10;
//计算总页数
$page_num=ceil($total_num/$pagesize);
//设置页数
$page=@$_GET['page'];
if($page<1||$page==''){
	$page=1;
	}
if($page>$page_num){
	$page=$page_num;
	}
//计算记录的偏移量
$offset=$pagesize*($page-1);
//上一页、下一页
$prepage=($page<>1)?$page-1:$page;
$nextpage=($page<>$page_num)?$page+1:$page;
$result=mysqli_query($conn,"select * from friend ORDER BY id desc LIMIT $offset,$pagesize");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="css/table.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
<tr>
<td height="41" colspan="3" class="tt">友情链接列表</td>
</tr>
<tr>
<td height="35">标题</td><td>链接</td>
<td width="15%">操作</td>
</tr>
<tr>
<?php
if($total_num>0){
	while ($row=mysqli_fetch_array ($result)){
		?>
        <td width="38%" height="39"><?php echo $row['title']?></td>
        <td><?php echo $row['url']?></td>
        
        <td><input type="submit" name="button" id="button" value="修改" onclick="window.location.href='friend_modify.php?id=<?=$row['id']?>'" />&nbsp;&nbsp;
        <input type="button" name="button2" id="button2" value="删除" onclick="window.location.href='friend_delete.php?id=<?=$row['id']?>'" /></td>
        </tr>
        <?php
	}
}else{
	?>
    <tr><td height="41" colspan="3">暂无记录！</td></tr>
    <?php
}
?>
	<tr>
<td height="43" colspan="5" align="center">
<?=$page?>/<?=$page_num?>&nbsp;&nbsp;<a href="?page=1">首页</a>&nbsp;&nbsp;<a href="?page=<?=$prepage?>">上一页</a>&nbsp;&nbsp;<a href="?page=<?=$nextpage?>">下一页</a>&nbsp;&nbsp;<a href="?page=<?=$page_num?>">尾页</a>
    </tr>
    </table>
</body>
</html>
<?php mysqli_close($conn);?>