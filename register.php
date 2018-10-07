<? include('nav.php'); ?>
		<title>用户注册</title>
	</head>
	<body>
		<div id="con">
			<div id="bk">
				<form method="post" action="register_class.php">
					<table >
					<caption>用户注册</caption> 	
					<tr>
						<td class="td1"><a href=""></a>账号:</td>
						<td class="td2"><input type="text" class="wbk" name="nnum" id="nnum" placeholder="username"  />
						</td></tr>
					<tr>
						<td class="td1"><a href=""></a>密码:</td>
						<td class="td2"><input type="password" class="wbk" name="npass" id="npass" placeholder="password" />
						</td></tr>
					<tr>
						<td  class="td1"><a href=""></a>重复密码:</td>
						<td class="td2"><input type="password" class="wbk" name="npass2" id="npass2" placeholder="password" />
						</td></tr>
					<tr>
						<td  class="td1">姓名:</td>
						<td class="td2"><input type="text" class="wbk" name="nname" id="nname" placeholder="name" />
						</td></tr>
					<tr>
						<td  class="td1">手机号:</td>
						<td class="td2"><input type="tel" class="wbk" name="ntel" id="ntel" placeholder="tel" />
						</td></tr>
					</table>
					<div id="anniu">
						<a href=""><input type="submit" value="注册"></a>
						<a href=""><input type="reset" value="重置"></a>
					</div>
				</form>		
			</div>
		</div>
		
	</body>

</html>
<? include('footer.php'); ?>
