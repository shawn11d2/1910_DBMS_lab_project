<?php 
		session_start();
		include('connect.php');

		$Username=$_POST['Username'];
		$Password=$_POST['Password'];

		$sql=mysqli_query($conn,"select * from admin where Username='$Username' && Password='$Password'");
			if(mysqli_num_rows($sql))  
			{
				$_SESSION['Username']=$Username;
				$success= 1;
				header("location:place.html");
			} 

			else{
					$success= 0;
			 		
			 		header("location:admin_login.php?success=$success");
			 	} 	
	?>