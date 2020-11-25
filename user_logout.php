<!DOCTYPE html>
<html>
<head>
	<title> logOut </title>
</head>
<body>
	<?php
		session_destroy();
		header("location:index.html");
	?>
</body>
</html>