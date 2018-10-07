<?php require_once('header.php');?>
<!--幻灯片结束-->
<!--about_main开始-->
<div class="about_main">
<!--左侧 slide-->
<?php require_once('slide.php');?>
<!--给我留言-->
<div class="right">
<div class="submenu"><a href="index.php">首页</a>-><a href="">给我留言</a>-></div>
<div class="guestbook_content">
<form name="form1" id="form1" action="?act=add" method="post">
<ul>
<li class="title"><span class="must">*</span>标题：</li>
<li><input name="title" type="text" id="title"></li>
</ul>
<ul>
<li class="title"><span class="must">*</span>称呼：</li>
<li><input name="name" type="text" id="name"></li>
</ul>
<ul>
<li class="title">手机：</li>
<li><input name="tel" type="text" id="tel"></li>
</ul>
<ul>
<li class="title">&nbsp;&nbsp;QQ：</li>
<li><input name="qq" type="text" id="qq"></li>
</ul>
<ul>
<li class="title"><span class="must">*</span>邮箱：</li>
<li><input name="email" type="text" id="email"></li>
</ul>

<ul class="ct">
<li class="title"><span class="must">*</span>内容：</li>
<li>
<textarea name="content" cols="60" rows="5" id="content"></textarea>
</li>
</ul>
<div>
<input type="image" src="img/submit.png">
</div>
</form>
</div>
</div>
</div>
<!--main结束-->
<?php
if(@$_GET['act']==@add){
	if($_POST['title']==""){
		echo "<script>alert ('留言标题不能为空！');history.go(-1)</script>";
		exit;
		}
	if($_POST['name']==""){
		echo "<script>alert ('称呼不能为空！');history.go(-1)</script>";
		exit;
		}
	if($_POST['email']==""){
		echo "<script>alert ('邮箱不能为空！');history.go(-1)</script>";
		exit;
		}
	if($_POST['content']==""){
		echo "<script>alert ('留言内容不能为空！');history.go(-1)</script>";
		exit;
		}

$sql_guestbook="insert into guestbook(title,pubdate,name,tel,qq,email,content,deal) values('".$_POST['title']."',curdate(),'".$_POST['name']."','".$_POST['tel']."','".$_POST['qq']."','".$_POST['email']."','".$_POST['content']."','否')";
mysqli_query($conn,$sql_guestbook);
	echo "<script>alert ('留言成功，我们尽快联系您！');window.location.href='guestbook.php'</script>";}
?>

<!--页尾开始-->
<?php require_once('footer.php');?>