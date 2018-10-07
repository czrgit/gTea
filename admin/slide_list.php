<?php 
require_once('session.php');
require_once('../inc/conni.php');
 //记录的总条数
$total_num=mysqli_num_rows(mysqli_query($conn,"select * from slide"));
//设置每页显示的记录数
$pagesize=5;
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
$result=mysqli_query($conn,"select * from slide ORDER BY id desc LIMIT $offset,$pagesize");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="css/table.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function AutoResizeImage(maxWidth,maxHeight,objImg){
	var img=new Image();
	img.src=objImg.src;
	var hRatio;
	var wRatio;
	var Ratio=1;
	var w=img.width;
	var h=img.height;
	wRatio=maxWidth/w;
	hRatio=maxHeight/h;
	if(maxWidth==0&&maxHeight==0){
		Ratio=1;
		
		}else if(maxWidth==0){
		if(hRatio<1) Ratio=hRatio;	
		}else if(maxHeight==0){
		if(wRatio<1)Ratio=wRatio;
		}else if(wRatio<1||hRatio<1){
		Ratio=(wRatio<=hRatio?wRatio:hRatio);
			}
		if(Ratio<1){
			w=w*Ratio;
			h=h*Ratio;
			}
		objImg.height=h;
		objImg.width=w;
			}
	
</script>
</head>

<body>
<table width="100%" border="1" cellpadding="0" cellspacing="0">
<tr>
<td height="41" class="tt" colspan="5">焦点幻灯列表</td>
</tr>
<tr>
<td height="35">标题</td>
<td>链接</td>
<td width="26%">缩略图</td>
<td>排序</td>
<td width="15%">操作</td>
</tr>
<?php
if($total_num>0){
	while($row=mysqli_fetch_array($result)){	
?>
<tr>
<td height="38%" height="70"><?php echo $row['title']?></td>
<td width="13%"><?php if($row['link']==''){echo '无';}else{?><a target="new" href="<?=$row['link']?>">查看</a><?php }?></td>
<td><img src="<?php echo $row['thumbnail']?>" width="0" height="0" onload="AutoResizeImage(300,100,this)" /></td>
<td width="8%"><?=$row['orderid']?></td>

<td><input type="submit" name="button" id="button" value="修改" onclick="window.location.href='slide_modify.php?id=<?php echo $row['id']?>'" />
<input type="submit" name="button2" id="button2" value="删除" onclick="window.location.href='slide_delete.php?id=<?php echo $row['id']?>'" /></td>
</tr>
<?php
	}
}else{
	?>
<tr>
<td height="41" colspan="5">暂停记录！</td>
</tr>
<?php
}
?>
<tr>
<td height="43" colspan="5" align="center">
<?=$page?>/<?=$page_num?>&nbsp;&nbsp;<a href="?page=1">首页</a>&nbsp;&nbsp;<a href="?page=<?=$prepage?>">上一页</a>&nbsp;&nbsp;<a href="?page=<?=$nextpage?>">下一页</a>&nbsp;&nbsp;<a href="?page=<?=$page_num?>">尾页</a></td>
</tr>
</table>
</body>
</html>
<?php mysqli_close($conn);?>