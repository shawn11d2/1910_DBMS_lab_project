<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<title>Registration Form </title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
	<link href="css/style3.css" rel="stylesheet">
</head>
<body>
	<div class="reg-form">
		<img alt="" class="avatar" src="images/avtar_login.jpg">
		<h2>REGISTER</h2>
		<form  method="post" enctype="multipart/form-data">
			<p>Username</p><input placeholder="Enter Username" name="username"  type="text">
			<p>EmailID</p><input placeholder="Enter EmailID" name="Email"  type="Email">
			<p>Passwrod</p><input placeholder="Enter Password" name="Password" type="password">
			<p>Confirm-Password</p><input placeholder="Confirm Password" name="Password_2" type="password">
			
            <input type="submit" value="Submit" name="save"> 
            <div class="reg">
            <p> Have an Account??</p>
            <a href="login.php">Sign IN </a>
            </div>
			
		</form>
	</div>
	<?php
		include('connect.php');
		extract($_REQUEST);
		if(isset($save))
		{
			  $sql= mysqli_query($conn,"select * from user where username='$username'");
			  if(mysqli_num_rows($sql))
			  {
			  	echo '<script>alert(" Username Already Exist")</script>';
			  }

			  else
			  {
			  	$sql= "insert into user(username,Email,Password) values ('$username','$Email','$Password')";
			  	if(mysqli_query($conn,$sql))
			  	{
					  echo '<script>alert("Registered")</script>';  
					  header("location:welcome.php");
			  	}

			  	else
			  	{
					  echo '<script>alert("Not Registered")</script>'; 
					  header("location:user_register.php");
			  	}	
			  }
		}

	?>
	  
</body>
</html>