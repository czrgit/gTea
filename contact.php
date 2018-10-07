<?php require_once('header.php');?>
<!--about_main开始-->
<div class="about_main">
<!--左侧 slide-->
<?php require_once('slide.php');?>
<!--联系我们-->
<div class="right">
<div class="submenu"><a href="index.html">首页</a>-<a href="">联系我们</a></div>
<div class="contact_content">
<div class="contact_img"><img src="img/contact.jpg"></div>
<div class="detail">
<?php
$sql_about="select * from single where id=9";
$result_about=mysqli_query($conn,$sql_about);
$row_about=mysqli_fetch_array($result_about);
echo $row_about['content']
?>

</div>
</div>
</div>
</div>
<!--main结束-->
<!--页尾开始-->
<?php require_once('footer.php');?>
