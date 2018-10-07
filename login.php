<? include('nav.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>用户登录</title>
		<style type="text/css">
			#l-con{
				padding-top: 100px;
				width: 400px;
				height: 400px;
				margin: 0 auto;
			}
			#login{
				width: 300px;
				height: 200px;
				margin-top: 70px;
				margin-left: 50px;
				border-radius: 5px;
				background-color: darkgrey;
				position: absolute;
			}
			 #nnum{
				width: 200px;
				height: 25px;
				font-family: 宋体;
				font-size: 20px;
				margin-top: 10px;
			}
			#npass{
				width: 200px;
				height: 25px;
				font-family: 宋体;
				font-size: 20px;
				margin-top: 10px;
			}
			
			.zc{
				width: 100px;
				height: 30px;
				background-color:white;
				margin-top: 10px;
				outline: none;
				font-size: 20px;
				border: 1px solid white;
				border-radius: 10px;		
				cursor: pointer;/* 鼠标经过变小手 */
			}
			 #dl:hover{
				background-color: limegreen;
				color: white;
			}
			 #zc:hover{
				background-color: orangered;
				color: white;
			}	
		</style>
	</head>
	<body style="background-color: gainsboro;">
		<div id="l-con">
			<div id="login">
				<form method="post" action="login_class.php">
					<table align="center" >
					<caption>用户登录</caption> 	
					<tr align="center">
						<td>账号:<input type="text" name="nnum" id="nnum" placeholder="username"  />
						</td></tr>
					<tr align="center">
						<td>密码:<input type="password" name="npass" id="npass" placeholder="password" />
						</td></tr>
					<tr align="right" >
						<td><a><input type="submit" name="" class="zc" id="dl" value="登录"></a>
							<a href="register.php"><input type="button" name="" class="zc"  id="zc"value="注册"></a>
						</td></tr>
					</table>
				</form>		
			</div>
			
		</div>
	
	</body>
</html>
<? include('footer.php'); ?>