<?php 
		session_start();
		include('connect.php');

		$Username=$_POST['Username'];
		$Password=$_POST['Password'];

		$sql=mysqli_query($conn,"select * from user where Username='$Username' && Password='$Password'");
			if(mysqli_num_rows($sql))  
			{
				$_SESSION['Username']=$Username;
				$success= 1;
				header("location:welcome.php");
			} 

			else{
					$success= 0;
			 		
			 		header("location:login.php?success=$success");
			 	} 	
	?>