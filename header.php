<?php session_start() ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>农香飘飘</title>
			<link rel="stylesheet" href="css/index.css">
			<link rel="stylesheet" href="css/lrtk.css">
			<script src="js/jquery.min.js"></script>
			<script src="js/responsiveslides.min.js"></script>
			<script src="js/slide.js"></script>
	</head>
	<body>
		<div id="main">
			<nav>
				<div class="nav">
					<li><a href="">农香飘飘</a></li>
					<li><a href="index.php">首页</a></li>
					<li><a href="Grains.php">五谷</a></li>
					<li><a href="vegetable.php">蔬菜</a></li>
					<li><a href="#">水果</a></li>
					<li><a href="#">营养</a></li>
					<li><a href="#">故事</a></li>
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
			<header>
				<div id="header-top">
					<div id="login-img" >
						<img src="img/bg.png"  width="100" height="60"/>
					</div>
					<div id="header-nav">
						<ul>
							<li id="book" ><a id="color" href="">首页</a></li>
							<li><a href="Grains.php">粳米</a>				
							<li><a href="">面食</a></li>
							<li><a href="vegetable.php">蔬菜</a></li>
							<li><a href="">水果</a></li>
							<li><a href="">营养</a></li>
						</ul>	
					</div>
				</div>
				<div id="content">
					<div id="left-content">
						<ul>
							<li><img src="img/水稻.png" /><a href="Grains.php">主食五谷</a></li>
							<li><img src="img/蔬菜.png"  /><a href="vegetable.php">日常蔬菜</a></li>
							<li><img src="img/蜜橘.png"  /><a href="">果香飘飘</a></li>
							<li><img src="img/健康.png"  /><a href="">营养健康</a></li>
							<li><img src="img/book.png"  /><a href="">经典故事</a></li>
						</ul>
					</div>
					<div id="right-content">
						<!-- 代码 开始 -->
					    <div class="slide_container">
					      <ul class="rslides" id="slider">
					        <li>
					          <img src="img/1.jpg" alt="">
					          <p class="caption">黄金香橙</p>
					        </li>
					        <li>
					          <img src="img/2.jpg" alt="">
					          <p class="caption">泰国香米</p>
					        </li>
					        <li>
					          <img src="img/3.jpg" alt="">
					          <p class="caption">农家青菜</p>
					        </li>
					      </ul>
					    </div>
					<!-- 代码 结束 -->
					</div>
				</div>
			</header>
