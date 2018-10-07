<?php 

require_once('session.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
require_once('../inc/conni.php');
$sql="delete from produce where id='".$_GET['id']."'";
mysqli_query($conn,$sql);
echo "<script>alert ('删除成功！'); window.location.href='produce_list.php'</script>";
mysqli_close($conn);

?>
</body>
</html>