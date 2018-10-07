<?php require_once('header.php');?>
<!--about_main开始-->
<div class="about_main">
<!--左侧 slide-->
<?php require_once('slide.php');?>
<!--产品展示-->
<div class="right">
<div class="submenu"><a href="index.php">首页</a>-><a href="produce_list.php">产品展示</a>-></div>
<div class="produce_content">
<?php //记录的总条数
$total_num=mysqli_num_rows(mysqli_query($conn,"select id from article"));
//设置每页显示的记录数
$pagesize=16;
//计算总页数
$page_num=ceil($total_num/$pagesize);
//设置页数
$page=@$_GET['page'];
if($page<1||$page==''){
	$page=1;
	}
if($page>$page_num){
	$page=$page_num;
	}
//计算记录的偏移量
$offset=$pagesize*($page-1);
//上一页、下一页
$prepage=($page<>1)?$page-1:$page;
$nextpage=($page<>$page_num)?$page+1:$page;
$result_producelist=mysqli_query($conn,"select * from produce ORDER BY id desc LIMIT $offset,$pagesize");
if($total_num>0){
	while($row_producelist=mysqli_fetch_array($result_producelist)){	
?>
<div class="pro_box"><a href="produce_show.php?id=<?=$row_producelist['id']?>"><img src="<?php echo $row_producelist['thumbnail']?>" /></a></div>
<?php
	}
	?>
</div>
<div class="page">
<a><?=$page?>/<?=$page_num?></a>&nbsp;&nbsp;
<a href="?page=1">|<</a>&nbsp;&nbsp;
<a href="?page=<?=$prepage?>"><< </a>&nbsp;&nbsp;
<?php
for($i=1;$i<=$page_num;$i++ ){
?>
<a href="?page=<?php echo $i?>"><?=$i?></a>
<?php }?>
&nbsp;&nbsp;<a href="?page=<?=$nextpage?>">>></a>&nbsp;&nbsp;<a href="?page=<?=$page_num?>">>|</a>
</div>
<?php
}else{
	echo "暂无记录！";
	}
	?>
  
</div>
</div>
<!--main结束-->
<!--页尾开始-->
<?php require_once('footer.php');?>
