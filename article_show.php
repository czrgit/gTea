<?php require_once('header.php');?>
<div class="about_main">
<!--左侧 slide-->
<?php require_once('slide.php');?>
<!--文章内容-->
<div class="right">
<div class="submenu"><a href="index.php">首页</a>-><a href="article_list.php">新闻动态</a>-></div>
<div class="article_content">
<?php
$sql_articleshow="select * from article where id='".@$_GET['id']."'";
$result_articleshow=mysqli_query($conn,$sql_articleshow);
$row_articleshow=mysqli_fetch_array($result_articleshow);
?>
<div class="title"><?=$row_articleshow['title']?></div>
<div class="from">来源：<?=$row_articleshow['comefrom']?>发布日期：<?=$row_articleshow['pubdate']?></div>
<div class="detail"><?=$row_articleshow['content']?></div>
</div>
</div>
</div>
<!--main结束-->
<!--页尾开始-->
<?php require_once('footer.php');?>
