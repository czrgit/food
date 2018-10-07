<?php	
	require('../inc/conn.php');
	$sql_g="select * from grains where gid='".$_GET['gid']."'";
	$result_g=mysqli_query($conn,$sql_g);
	$row_g=mysqli_fetch_array($result_g);
?>
<link rel="stylesheet" type="text/css" href="css/index.css"/>
<link rel="stylesheet" href="kindeditor/themes/default/default.css" />
<script charset="utf-8" src="kindeditor/kindeditor-all-min.js"></script>
<script charset="utf-8" src="kindeditor/lang/zh_CN.js"></script>
<script charset="UTF-8" src="kindeditor/tpsc.js"></script>

<div id="r-bt">
	请选择修改页面:
	<a href="right_main.php?gid=1">粳米</a>
	<a href="right_main.php?gid=2">小麦</a>
	<a href="right_main.php?gid=3">大豆</a>
	<a href="right_main.php?gid=4">黍米</a>
</div>
<div id="r-content">
	<form action="right_main_class.php?gid=<?php echo $row_g['gid'] ?>" method="post">
		<div class="r-title">
		<div class="r1">
			<i></i>网页标题:
		</div>
		<div class="r2">
			<input type="text" name="title" id="text" value="<?=$row_g['gtitle']?>" />
		</div>
		<div class="r-title">
			<div class="r1">
				<i></i>图片1地址:
			</div>
			<div class="r2">
				<input type="text" name="thumbnail" id="url3" value="<?=$row_g['img1']?>" />
				<input type="button" name="" id="image3" value="上传" />
			</div>
		</div>
		<div class="r-title">
			<div class="r1">
				<i></i>图片2地址:
			</div>
			<div class="r2">
				<input type="text" name="thumbnail2" id="url4" value="<?=$row_g['img2']?>" />
				<input type="button" name="" id="image4" value="上传" />
			</div>
		</div>
		<div class="r-title">
			<div class="r1">
				<i></i>图片3地址:
				</div>
			<div class="r2">
				<input type="text" name="thumbnail3" id="url5" value="<?=$row_g['img3']?>" />
				<input type="button" name="" id="image5" value="上传" />
				</div>		
		</div>
		<div class="r-title">
			<div class="r1">
				<i></i>文字介绍:
			</div>
			<div class="r2">
				<input type="text" name="jieshao" id="text" value="<?=$row_g['jieshao']?>" />
			</div>
		</div>
	<div class="r-title">
			<div class="r1">
				<i></i>图片4地址:
			</div>
			<div class="r2">
				<input type="text" name="thumbnail4" id="url6" value="<?=$row_g['img4']?>" />
				<input type="button" name="" id="image6" value="上传" />
			</div>
		</div>
	<div class="r-title">
		<div class="r1">
				<i></i>文字拼音:
		</div>
		<div class="r2">
			<input type="text" name="pingyin" id="text" value="<?=$row_g['pingyin']?>" />
		</div>
	</div>
	<div class="r-title">
		<div class="r1">
				<i></i>营养元素:
		</div>
		<div class="r2">
			<input type="text" name="yyys" id="text" value="<?=$row_g['yyys']?>" />
		</div>
	</div>
	<div class="r-title">
		<div class="r1">
				<i></i>英文名:
		</div>
		<div class="r2">
			<input type="text" name="ywm" id="text" value="<?=$row_g['ywm']?>" />
		</div>
	</div>
	<div class="r-title">
		<div class="r1">
				<i></i>别名:
		</div>
		<div class="r2">
			<input type="text" name="bm" id="text" value="<?=$row_g['bm']?>" />
		</div>
	</div>
	<div class="r-wz">
		<div class="z1">
				<i></i>简介:
		</div>
		<div class="z2">
			<textarea name="jianjie" rows="5" cols="65"><?=$row_g['jianjie']?></textarea>
		</div>
	</div>
	<div class="r-wz">
		<div class="z1">
				<i></i>相关记载:
		</div>
		<div class="z2">
			<textarea name="xgjz" rows="4" cols="65"><?=$row_g['xgjz']?></textarea>
		</div>
	</div>
	<div class="r-wz">
		<div class="z1">
				<i></i>相关记载2:
		</div>
		<div class="z2">
			<textarea name="xgjz2" rows="4" cols="65"><?=$row_g['xgjz2']?></textarea>
		</div>
	</div>
	<div class="r-wz">
		<div class="z1">
				<i></i>相关记载3:
		</div>
		<div class="z2">
			<textarea name="xgjz3" rows="4" cols="65"><?=$row_g['xgjz3']?></textarea>
		</div>
	</div>
	<div class="r-wz">
		<div class="z1">
				<i></i>保健作用:
		</div>
		<div class="z2">
			<textarea name="bjzy" rows="4" cols="65"><?=$row_g['bjzy']?></textarea>
		</div>
	</div>
	<div class="r-wz">
		<div class="z1">
				<i></i>保健作用2:
		</div>
		<div class="z2">
			<textarea name="bjzy2" rows="4" cols="65"><?=$row_g['bjzy2']?></textarea>
		</div>
	</div>
	<div class="r-wz">
		<div class="z1">
				<i></i>保健作用3:
		</div>
		<div class="z2">
			<textarea name="bjzy3" rows="4" cols="65"><?=$row_g['bjzy3']?></textarea>
		</div>
	</div>
	<div class="r-wz">
		<div class="z1">
				<i></i>保健作用4:
		</div>
		<div class="z2">
			<textarea name="bjzy4" rows="4" cols="65"><?=$row_g['bjzy4']?></textarea>
		</div>
	</div>
	<div id="an" >
			<input type="submit" name="" id="aj" value="修改" />
		</div>	
	</form>

</div>