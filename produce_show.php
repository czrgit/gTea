<?php require_once('header.php');?>
<!--幻灯片结束-->
<!--about_main开始-->
<div class="about_main">
<!--左侧 slide-->
<?php require_once('slide.php');?>
<!--文章内容-->
<div class="right">
<div class="submenu"><a href="index.php">首页</a>-><a href="produce_list.php">产品展示</a>-></div>
<div class="produce_show_content">
<?php
$sql_produceshow="select * from produce where id='".$_GET['id']."'";
$result_produceshow=mysqli_query($conn,$sql_produceshow);
$row_produceshow=mysqli_fetch_array($result_produceshow);
?>
<div class="title"><?=$row_produceshow['title']?></div>
<div class="detail">
<?=$row_produceshow['content']?>
</div>
</div>
</div>
</div>
<!--main结束-->
<!--页尾开始-->

<?php require_once('footer.php');?>