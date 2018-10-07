
<?php
	session_start();
	require('../inc/conn.php');
	$sql_grains="update grains set 
		gtitle='".$_POST['title']."',img1='".$_POST['thumbnail']."',
		img2='".$_POST['thumbnail2']."',img3='".$_POST['thumbnail3']."',
		img3='".$_POST['thumbnail3']."',jieshao='".$_POST['jieshao']."',
		img4='".$_POST['thumbnail4']."',pingyin='".$_POST['pingyin']."',
		yyys = '".$_POST['yyys']."',ywm = '".$_POST['ywm']."',bm = '".$_POST['bm']."',
		jianjie='".$_POST['jianjie']."',xgjz='".$_POST['xgjz']."',
		xgjz2='".$_POST['xgjz2']."',xgjz3='".$_POST['xgjz3']."',
		bjzy='".$_POST['bjzy']."',bjzy2='".$_POST['bjzy2']."',
		bjzy3='".$_POST['bjzy3']."',bjzy4='".$_POST['bjzy4']."'
		where gid='".$_GET['gid']."'";
	mysqli_query($conn,$sql_grains);
	echo "<script>alert ('修改成功！'); 
	window.location.href='right_main.php?gid=".$_GET['gid']."'</script>";
	mysqli_close($conn);
	
?>