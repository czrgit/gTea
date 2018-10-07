<?php
session_start();
require_once('session.php');
require_once('../inc/conni.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
if($_POST['posid']<>""){
foreach ($_POST['posid']as $i){
	$posid.=$i.",";
}
	$posid=substr($posid,0,-1);
	}else{
	$posid="";
		}
$sql="insert into article (title,comefrom,pubdate,keywords,description,content,posid) values ('".$_POST['title']."','".$_POST['comefrom']."','".$_POST['pubdate']."','".$_POST['keywords']."','".$_POST['description']."','".$_POST['content']."','".$posid."')";
mysqli_query($conn,$sql);
echo "<script>alert('数据写入成功！');window.location.href='article_list.php';</script>";
mysqli_close($conn);
?>
</body>
</html>