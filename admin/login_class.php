<?php session_start() ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
<?php
	require('../inc/conn.php');
	$user_num = $_POST['name'];
	$user_pass=$_POST['pass'];
	if($user_num==""){
	echo "<script>alert ('账号不能为空！'); history.go(-1)</script>";
	exit;
	}
	if($user_pass==""){
	echo "<script>alert ('密码不能为空！'); history.go(-1)</script>";
	exit;
	}
	$sql="select * from admin where name='".$user_num."'and pass='".$user_pass."'";
	$result=mysqli_query($conn,$sql);

	if($result){
	$row=mysqli_num_rows($result);
		
	if($row>0){
		$_SESSION['ischecked']="ok";
		$_SESSION['user_name']=$_POST['name'];
			echo "<script>alert('登录成功！'); window.location.href='index.php'</script>";
			exit;
		}else{
			echo "<script>alert('你的账号或密码不正确！'); window.location.href='login.php'</script>";
			exit;
		}
		}
	mysqli_query($conn);

?>
	</body>
</html>