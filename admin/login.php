<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>后台登录</title>
		<link rel="stylesheet" type="text/css" href="css/index.css"/>
		<style type="text/css">
			#login{
				margin: 0 auto;
				margin-top: 170px;
				width: 400px;
				height:250px;				
				border-radius: 5px;
				background-color: darkgrey;				
			}
			.a-bt{
				text-align: center;
				font-size: 20px;
				padding-top: 10px;
				padding-bottom: 10px;
			}
			#a-p{
				margin-left: 80px;
			}
			p{
				margin-bottom: 10px;
			}
			span{
				margin-right: 10px;
				font-size: 17px;
			}
			.wb{
				height: 25px;
				width: 200px;
			}
			button{
				margin-left: 80px;
				width: 100px;
				height: 30px;
				font-size: 18px;
				outline: none;
				cursor: pointer;
			}
			button:hover{
				border: 1px solid black;				
			}	
		</style>
	</head>
	<body style="background-color: gainsboro;">
		<div id="login">
			<form method="post" action="login_class.php">
				<p class="a-bt">后台管理登录</p>
				<div id="a-p">
					<p><span>账号:</span><input type="text" name="name" class="wb" value="" placeholder="username" /></p>	
					<p><span>密码:</span><input type="password" name="pass" class="wb" value="" placeholder="userpass" /></p>	
					<p><button type="submit">登录</button></p>
				</div>
				
			</form>		
		</div>	
	</body>
</html>
<?php require('footer.php') ?>