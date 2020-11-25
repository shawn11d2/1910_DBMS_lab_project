
<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <title>Admin Login Form</title>
  <link  href="css/styles4.css" rel="stylesheet">
</head>
<body>
<div>
<div class="hd">
    <h2>Travel Guide</h2>
</div>  
<form class="box" action="login_session2.php"  method = "post" enctype="multipart/form-data" >
<h1>Admin Login</h1>
<input type="text" name="Username" placeholder="Username">
<input type="password" name="Password" placeholder="Password">
<input type="submit"  value=" login ">
</form>

</div>
<?php
		if (isset($_REQUEST['success'])) {
			echo '<script>alert("Username or password incorrect")</script>';
		}
    ?>


</body>
</html>