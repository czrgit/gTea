
<!-- 页尾开始 -->

<div class="footer">
<div class="center_box">
<div class="text">
<?=$config['company_name']?><br/>
电话：<?=$config['company_phone']?> email：<?=$config['company_email']?><br/>
地址：<?=$config['company_address']?><br/>
友情链接：<?php
$sql_friend="select * from friend";
$result_friend=mysqli_query($conn,$sql_friend);
while($row_friend=mysqli_fetch_array($result_friend)){
	?>
    <a style="color:#FFF;" href="<?=$row_friend['url']?>" target="_blank"><?=$row_friend['title']?></a>&nbsp;&nbsp;
    <?php
    }
?>
</div>
<div class="ewm">
<img src="<?=$config['company_ewm']?>" alt="" />
</div>
</div>

</div>
<!--页尾结束-->


</body>

</html>
