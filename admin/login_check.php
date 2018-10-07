<?php session_start() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php 
require_once '../inc/conni.php';
$admin_name=$_POST['admin_name'];
$admin_pass=$_POST['admin_pass'];
$sql="select * from admin where admin_name='".$admin_name."'and admin_pass='".$admin_pass."'";
$result=mysqli_query($conn,$sql);

if($result){
$row=mysqli_num_rows($result);
	
if($row>0){
	$_SESSION['ischecked']="ok";
	$_SESSION['admin_name']=$_POST['admin_name'];
	echo "<script>alert('登录成功！'); window.location.href='index.php'</script>";
	exit;
	}else{
	echo "<script>alert('你的账号或密码不正确！'); window.location.href='login.php'</script>";
	exit;
	}
	}
mysqli_query($conn);
?>

</body>
</html>