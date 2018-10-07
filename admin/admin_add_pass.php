<?php
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
$admin_name=$_POST['admin_name'];
if($admin_name==""){
	echo "<script>alert ('账号不能为空！'); history.go(-1)</script>";
	exit;
	}else if(mysqli_num_rows(mysqli_query($conn,"select * from admin where admin_name='".$_POST['admin_name']."'"))>0){
		echo "<script>alert ('该账号已存在，请换另一个账号！'); window.location.href='admin_add.php'</script>";
		exit;
		}
$admin_pass=$_POST['admin_pass'];
if($admin_pass==""){
	echo "<script> alert ('密码不能为空！');history.go(-1)</script>";
	exit;
	}
$sql_add="insert into admin(admin_name,admin_pass) values ('".$admin_name."','".$admin_pass."')";
mysqli_query($conn,$sql_add);
echo "<script>alert ('添加成功！');window.location.href='admin_list.php';</script>";
exit;
mysqli_close($conn);
?>
</body>
</html>