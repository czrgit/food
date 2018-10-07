<?php
			$conn = mysqli_connect('127.0.0.1','root','root','good');
			if(!$conn){
			die('Could not connect'.mysql_error());
			}
			mysqli_set_charset($conn, "utf8");
		?>
		

