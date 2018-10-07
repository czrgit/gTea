<?php 
require_once('session.php');
require_once('../inc/conni.php'); 
?>

<?php

$sql="insert into single (title,comefrom,pubdate,keywords,description,content) values ('".$_POST['title']."','".$_POST['comefrom']."','".$_POST['pubdate']."','".$_POST['keywords']."','".$_POST['description']."','".$_POST['content']."')";
mysqli_query($conn,$sql);
echo "<script>alert('添加成功！');window.location.href='single_add.php';</script>";
mysqli_close($conn);
?>
