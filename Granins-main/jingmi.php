<?php	
	require('../inc/conn.php');
	$sql_g="select * from grains where gid=1 ";
	$result_g=mysqli_query($conn,$sql_g);
	
	$row_g=mysqli_fetch_array($result_g);
?>
<link rel="stylesheet" type="text/css" href="../css/index.css"/>
<div id="m-bt">
	<?=$row_g['jieshao']?>介绍
</div>
<div id="m-nr">
	<div id="m-img">
		<a href=""><img src="<?=$row_g['img4']?>" /></a>
	</div>
	<div id="m-wenz">
		<span id="m-pingyin">
			[<?=$row_g['pingyin']?>]
		</span><br />
		<span id="m-wz1"><?=$row_g['jieshao']?></span><span>( <?=$row_g['jieshao']?>  )</span><br /><br />
		<div class="m-wz">
			<div class="m-zw">中文名</div> 
			<div class="m-zw2"><?=$row_g['jieshao']?></div> 
			<div class="m-zw" >营养元素</div> 
			<div><?=$row_g['yyys']?></span></div> 
		</div>
		
		<hr />
		<div class="m-wz">
			<span class="m-zw">英文名</span>
			<span class="m-zw2"><?=$row_g['ywm']?></span>
			<span class="m-zw">别    名</span>
			<span ><?=$row_g['bm']?></span><br />
		</div>
		
		<hr />
		<span class="m-ml">简介</span>
		<p class="m-wz4"><?=$row_g['jianjie']?></p>
		
	</div>
	<div id="m-gs">
		<span class="m-ml">相关记载</span>
		<p class="m-wz4">
			<?=$row_g['xgjz']?>
		</p>
		<p class="m-wz4">
			<?=$row_g['xgjz2']?>
		</p>
		<p class="m-wz4">
			<?=$row_g['xgjz3']?>
		</p>
		
		<span class="m-ml">保健作用</span>
		<p class="m-wz4"><?=$row_g['bjzy']?></p>
			
		<p class="m-wz4"><?=$row_g['bjzy2']?></p>
			
		<p class="m-wz4"><?=$row_g['bjzy3']?></p>
						
		<p class="m-wz4"><?=$row_g['bjzy4']?></p>
	</div>
</div>