
<div class="slide">
<div class="cat_title">在线客服</div>
<div class="qq">
<?php
$sql_qq="select * from qq";
$result_qq=mysqli_query($conn,$sql_qq);
while($row_qq=mysqli_fetch_array($result_qq)){
	?>
<div><?=$row_qq['title']?><img style="cursor:pointer" onClick="javascript:window.open('http://b.qq.com/webc. htm?new=0&sid=<?=$row_qq['qqnum']?>&o=http://&q=7','_blank','height=502,width=644,toolbar=no,scrollbars=no,menubar=no,status=no');"border="0" SRC=http://wpa.qq.com/pa?p=1:382526903: 7 alt="欢迎咨询" /></div>
<?php
}
?>
</div>
<div class="service">
<span class="title">24小时服务热线</span><br/>
<span class="detail"><?=$config['company_phone']?></span>
</div>
<div class="weixin">
<span class="title">微信公众号</span><br/>
<span class="detail"><?=$config['company_weixin']?></span>
</div>
<div class="email">
<span class="title">电子邮箱</span><br/>
<span class="detail"><?=$config['company_email']?></span>
</div>
</div>