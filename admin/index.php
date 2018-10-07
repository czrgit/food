<?php require_once('session.php') ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>后台管理</title>
			<link rel="stylesheet" href="css/index.css">
		
	</head>
	<body>
	<div id="main">
		<div id="top">
			<div id="t-text">农香飘飘后台管理</div>
			<div id="nav-right">
					<?php
						if($_SESSION['user_name']){
							echo "<li><a href=''>账号:</a></li>";
						}
						?>					
						<?php
							if($_SESSION['user_name']){
								echo "<li><a href=''>";
								echo $_SESSION['user_name'];	
								echo "</a></li>";
							}else{ 
								echo  "<li><a href='login.php'>登录</a></li>" ; }
								?>																		
						
						<?php
						if($_SESSION['user_name']){
							echo "<li><a href='loginout.php'>退出</a></li>";}?>																		
					
				</div>
		</div>
		<div id="content">
			<div id="left">
				<ul>
					<li><img src="img/水稻.png"/><a href="right_main.php?gid=1" target="myframe">五谷页面</a></li>
					<li><img src="img/蔬菜.png"/><a href="#" >蔬菜页面</a></li>
					<li><img src="img/蜜橘.png"/><a href="#">水果页面</a></li>
					<li><img src="img/健康.png"/><a href="#" >健康页面</a></li>
					<li><img src="img/book.png"/><a href="#" >故事页面</a></li>					
				</ul>
			</div>
			<div id="right">
				<iframe src="right_main.php" scrolling="no" frameborder="0" width="100%" height="100%" name="myframe"></iframe> 
			</div>
		</div>
			<?php require('footer.php') ?>
			</div>
	</body>
</html>