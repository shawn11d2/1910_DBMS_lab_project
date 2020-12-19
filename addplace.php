<!DOCTYPE html>
<html>
<head>
	<title>Place List</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</head>
<body class="bg-info" >
<nav class="navbar  navbar-expand-lg navbar-dark bg-secondary" >
		<a class="navbar-brand" href="">TouristGuide</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="view.php">ViewRecords</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="place.html">AddPlaces</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="logout.php">Logout</a>
			</li>
		</ul>          
</nav>

<!-- <div class="container">
			<br>
			<h1 class="text-white bg-danger text-center">
			Place LIST 
			</h1>
			<br>
			
			<div class="table-resposive">
				<table class="table table-border table-striped table-hover">
					
				<thead class="text-white bg-dark text-center">
					<th>ID</th>
					
					<th>Category</th>
					<th>Location</th>
					<th>Place</th>
					<th>Description</th>
					<th>Place Image</th>
					
				</thead>

				<tbody> -->
				
			<?php
				$con=mysqli_connect('localhost','root');
				mysqli_select_db($con,'testdb');

				if(isset($_POST['submit']))
				{
					
					$category=$_POST['category'];
					$location=$_POST['location'];
					$place = $_POST['place'];
					$description=$_POST['description'];
					$files=$_FILES['file'];
					$name=basename($files['name']);
					/*echo $name;*/
                    $path = 'DBimages/'.time().$name;
					
					
						/*	echo $files['size'];*/
						
						  if(move_uploaded_file($files['tmp_name'], $path))
                            {

								/*echo 'hi';*/
								$q = "INSERT INTO `tguide`(`category`, `location`, `place`,`description`, `pimage`) 
								VALUES ('$category','$location','$place','$description','$path')";
								$query= mysqli_query($con,$q);
								echo "<script>alert('A Place has been Added!')</script>";
								echo "<script>window.open('view.php','_self')</script>";
							}else '<script>alert("couldnt upload")</script>';

					
				}
				
			?>
				<?php	
				    
				   /* $dispquery = "select * from tguide";
					$querydisp = mysqli_query($con,$dispquery);

					

					while ($result = mysqli_fetch_array($querydisp)) {
						?>

						<tr>
							<td> <?php echo $result['id']; ?> </td>
							
							<td> <?php echo $result['category']; ?> </td>
							<td> <?php echo $result['location']; ?> </td>
							<td> <?php echo $result['place']; ?> </td>
							<td> <?php echo $result['description']; ?> </td>
							
							<td> <image src= "<?php echo $result['pimage']; ?>" height=100px width = 100px> </td>
                            
						</tr>



						<?php
					}

					
				}
				  
				?>

				</tbody>
				

				</table>
			</div>
</div>


</body>
</html>*/