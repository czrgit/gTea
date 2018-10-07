<?php
//创建数据库连接对象
$conn = mysqli_connect("127.0.0.1", "root", "root", "company");
//如果数据库连接失败，抛出错误信息
if(mysqli_connect_errno()){
	die('Could not connect'.mysql_error());
}

//设置编码为uft-8
mysqli_query($conn, "SET NAMES UTF8");
?>