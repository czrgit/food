<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8" />
	
</head>
<body>
<?php
	session_start() ;
	if(empty($_SESSION['admin_name'])&&$_SESSION['ischecked']!='ok'){
		echo "<script>alert ('请不要非法访问！'); window.location.href='login.php'</script>";
		exit;
		}

?>
</body>
</html>
