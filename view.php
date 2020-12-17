<!DOCTYPE html>
<html>
<head>
	<title>Place List</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body class="bg-info" >
<div class="container">
			<br>
			<h1 class="text-white bg-danger text-center">
			Place LIST 
			</h1>
			<br>
			<h3><a href="logout.php" >logout</a></h3>
			<h3><a href="place.html" >Add Place</a></h3>
			<div class="table-resposive">
				<table class="table table-border table-striped table-hover">
					
				<thead class="text-white bg-dark text-center">
					<th>ID</th>
					
					<th>Category</th>
					<th>Location</th>
					<th>Place</th>
					<th>Description</th>
                    <th>Place Image</th>
					<th>Edit</th>
                    <th>Delete</th>
				</thead>

				<tbody>
				
				<?php
				$con=mysqli_connect('localhost','root');
				mysqli_select_db($con,'testdb');

					
					
						/*	echo $files['size'];*/
						
						

					

					$dispquery = "select * from tguide";
					$querydisp = mysqli_query($con,$dispquery);

					

					while ($result = mysqli_fetch_array($querydisp)) {
						?>

						<tr>
							<td> <?php echo $result['id']; ?> </td>
							
							<td><?php echo $result['category']; ?></td>
							<td><?php echo $result['location']; ?></td>
							<td><?php echo $result['place']; ?></td>
							<td><?php echo $result['description']; ?></td>
							
							<td><image src= "<?php echo $result['pimage']; ?>" height=100px width = 100px></td>

							<td><a class="btn btn-primary" href="Edit.php?id=<?php echo $result['id']; ?>">Edit</a></td>
							<td><a class="btn btn-primary" href="delete.php?id=<?php echo $result['id']; ?>">Delete</a></td>
						</tr>



						<?php
					}

					
				

				?>

				</tbody>
				

				</table>
			</div>
</div>


</body>
</html>