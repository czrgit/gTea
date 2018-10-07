<?php require_once('header.php');?>
<!--about_main开始-->
<div class="about_main">
<!--左侧 slide-->
<?php require_once('slide.php');?>
<!--关于我们内容-->
<div class="right">
<div class="submenu"><a href="">首页</a>-><a href="">关于我们</a></div>
<div class="content">
<?php
$sql_about="select * from single where id=4";
$result_about=mysqli_query($conn,$sql_about);
$row_about=mysqli_fetch_array($result_about);
echo $row_about['content'];
?>
</div>
</div>
</div>
<?php require_once('footer.php');?>