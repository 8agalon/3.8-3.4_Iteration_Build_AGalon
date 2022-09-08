<!DOCTYPE html>
<html>
	
	<head>
	
	</head>
	
	<body>
		
		<?php
			unset($_SESSION['login_user']);
			session_destroy();
				header("Location:login.php");

		?>
			
	</body>
	
</html>
