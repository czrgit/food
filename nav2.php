<?php session_start() ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">		
			<link rel="stylesheet" href="css/index.css">
	</head>
	<body>
		<div id="main">
			<nav>
				<div class="nav">
					<li><a href="index.php">农香飘飘</a></li>
					<li><a href="index.php">首页</a></li>
					<li><a href="Grains.php">五谷</a></li>
					<li><a href="vegetable.php">蔬菜</a></li>
					<li><a href="">水果</a></li>
					<li><a href="">营养</a></li>
					<li><a href="">故事</a></li>
				</div>
				<div class="nav" id="nav-right">
				<?php
						if(isset($_SESSION['user_num'])){
							echo "<li><a href=''>账号:</a></li>";
						}
						?>
					<?php
						if(isset($_SESSION['user_num'])){
							echo "<li><a href=''>";
							echo $_SESSION['user_num'];	
							echo "</a></li>";
						}else{ 
							echo  "<li><a href='login.php'>登录</a></li>" ; }
							?>
												
						<?php
						if(isset($_SESSION['user_num'])){
							echo "<li><a href='loginout.php'>退出</a></li>";
						}
						?>
						
					<li><a href="register.php">
						<?php
						if(!isset($_SESSION['user_num'])){							
								echo "注册";
							}	
							?>
					</a></li>
					<li><a href="">联系我们</a></li>
				</div>
			</nav>