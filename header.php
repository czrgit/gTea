<?php
require_once('inc/conni.php');
$sql_config="select * from config";
$result_config=mysqli_query($conn,$sql_config);
$config=mysqli_fetch_array($result_config);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$config['site_title']?></title>
<meta name="keywords" content="<?=$config['site_keywords']?>" />
<meta name="description" content="<?=$config['site_description']?>" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/jquery.jslides.css"  media="screen" />
<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="js/jquery.jslides.js"></script>
<script type="text/javascript" src="js/jquery.SuperSlide.2.1.1.js"></script>
</head>
<!--页头开始-->
<body>

<div class="top">
<div class="center">
<div class="logo"><img src="<?=$config['site_logo']?>" width="141" height="42" /></div>
<div class="menu">
<a href="index.php">网站首页</a>
<a href="about.php">关于我们</a>
<a href="article_list.php">新闻动态</a>
<a href="produce_list.php">产品展示</a>
<a href="guestbook.php">给我留言</a>
<a href="contact.php">联系我们</a>
</div>
</div>
</div>
<!--页头结束-->
<!--焦点幻灯片开始-->

<div id="full-screen-slider">
<ul id="slides">
<?php 
$sql_slide="select * from slide order by orderid asc";
$result_slide=mysqli_query($conn,$sql_slide);
while($row_slide=mysqli_fetch_array($result_slide)){
	?>
<li style="background:url('<?=$row_slide['thumbnail']?>') no-repeat center top">
<a href="<?=$row_slide['link']?>" target="_blank"><?=$row_slide['title']?></a>
</li>
<?php
    }
?>
</ul>
</div> 
<!--焦点幻灯片结束-->
