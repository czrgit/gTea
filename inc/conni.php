<?php
//�������ݿ����Ӷ���
$conn = mysqli_connect("127.0.0.1", "root", "root", "company");
//������ݿ�����ʧ�ܣ��׳�������Ϣ
if(mysqli_connect_errno()){
	die('Could not connect'.mysql_error());
}

//���ñ���Ϊuft-8
mysqli_query($conn, "SET NAMES UTF8");
?>