<?php include'nav2.php' ?>
<?php	
	require('inc/conn.php');
	$sql_g="select * from grains where gid=1";
	$result_g=mysqli_query($conn,$sql_g);
	$row_g=mysqli_fetch_array($result_g);
?>
<title><?=$row_g['gtitle']?></title>
			<div id="g-header">
				<div id="g-header-top">
					<div id="g-login-img" >
						<img src="img/bg.png"  width="100" height="60"/>
					</div>
					<div id="g-header-nav">
						<ul>
							<li id="book" ><a id="color" href="">五谷首页</a></li>
							<li><a href="">粳米</a>				
							<li><a href="">面食</a></li>
							<li><a href="">蔬菜</a></li>
							<li><a href="">水果</a></li>
							<li><a href="">营养</a></li>
						</ul>	
					</div>
				</div>	
			</div>
			
			<div id="g-content">
				<div id="g-dh">
					<ul>
						<li><a href="Granins-main/jingmi.php" target="myframe">粳米</a></li>
						<li><a href="Granins-main/xiaomai.php" target="myframe">小麦</a></li>
						<li><a href="Granins-main/dadou.php" target="myframe">大豆</a></li>
						<li><a href="Granins-main/shumi.php" target="myframe">黍米</a></li>
						<li><a href="">营养</a></li>
					</ul>
				</div>
				<div id="g-img">
					<div class="g-img">
						<a href=""><img src="<?=$row_g['img1']?>"/></a>
					</div>
					<div class="g-img">
						<a href=""><img src="<?=$row_g['img2']?>"/></a>
					</div>
					<div class="g-img">
						<a href=""><img src="<?=$row_g['img3']?>"/></a>
					</div>
				</div>
				<div id="g-main">
					<iframe src="Granins-main/jingmi.php" frameborder="0" width="100%" height="100%" name="myframe"></iframe> 
				</div>
			</div>
			
<?php include'footer.php' ?>			
			
		

