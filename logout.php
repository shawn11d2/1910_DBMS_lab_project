<!DOCTYPE html>
<html>
<head>
	<title> logOut </title>
</head>
<body>
	<?php
		session_destroy();
		header("location:admin_login.php");
	?>
</body>
</html>