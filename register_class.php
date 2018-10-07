<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
<?php
	require('./inc/conn.php');
	$user_num = $_POST['nnum'];
	$user_pass=$_POST['npass'];
	$user_pass2=$_POST['npass2'];
	$user_name = $_POST['nname'];
	$user_tel = $_POST['ntel'];
	if($user_num==""){
	echo "<script>alert ('账号不能为空！'); history.go(-1)</script>";
	exit;
	}else if(mysqli_num_rows(mysqli_query($conn,"select * from username where nnum='".$_POST['nnum']."'"))>0){
		echo "<script>alert ('该账号已存在，请换另一个账号！'); window.location.href='register.php'</script>";
		exit;
		}
	
	if($user_pass==""){
		echo "<script> alert ('密码不能为空！');history.go(-1)</script>";
		exit;
		}
	if($user_pass!=$user_pass2){
		echo "<script> alert ('重复密码有误!');history.go(-1)</script>";
		exit;
		}	
	
	$sql_add="insert into username(nnum,npass,nname,ntel)
				 values ('".$user_num."','".$user_pass."','".$user_name."',
				 '".$user_tel."')";
	mysqli_query($conn,$sql_add);
	echo "<script>alert ('注册成功！');window.location.href='login.php';</script>";
	exit;
	mysqli_close($conn);
?>