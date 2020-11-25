<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<title>Login Form </title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
	<link href="css/styles2.css" rel="stylesheet">
</head>
<body>
	<div class="login-form">
		<img alt="" class="avatar" src="images/avtar_login.jpg">
		<h2>LOG IN</h2>
		<form action="login_session.php"  method = "post" enctype="multipart/form-data" >
			<p>Username</p><input placeholder="Enter Username" name = "Username" type="text">
            <p>Passwrod</p><input placeholder="Enter Password" name = "Password" type="password">
            <input type="submit" value="Sign in"> 
            <div class="reg">
            <p>Dont have an Account??</p>
            <a href="user_register.php">Register Now</a>
            </div>
			
		</form>
    </div>
   
    <?php
		if (isset($_REQUEST['success'])) {
			echo '<script>alert("Username or password incorrect")</script>';
		}
    ?>
    

</body>
</html>
