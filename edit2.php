<?php

        $con = mysqli_connect('localhost','root');
        $db = mysqli_select_db($con,'testdb');

 // get id through query string
$id = $_GET['id'];

$sql = "SELECT * FROM tguide WHERE id='$id'"; // select query
$qry = mysqli_query($con,$sql);

$result = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['submit'])) // when click on Update button
{
    
    $category = $_POST['category'];
    $location =$_POST['location'];
    $place =$_POST['place'];
    $description =$_POST['description'];
        
	$files=$_FILES['file'];
	$name=basename($files['name']);	
	$path = 'DBimages/'.time().$name;	
  
     if(move_uploaded_file($files['tmp_name'], $path))
     {
	
       $update = "UPDATE tguide SET category='$category', `location`='$location', place='$place', description='$description', pimage='$path' WHERE id='$id'";

		$edit = mysqli_query($con,$update);

		if($edit)
		{ 
			echo "<script>alert('A Place has been updated!')</script>";
			echo "<script>window.open('view.php','_self')</script>";
			
		}
		else
		{
			echo mysqli_error();
			exit();
		}  
	 }else '<script>alert("couldnt upload")</script>';	
}
?>











<!DOCTYPE html>
<html>
<head>
	<title> Edit Places </title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body class="bg-info" >
      
		<div class="container">
			<br>
			<h1 class="text-white bg-dark text-center">
			EDIT PLACES 
			</h1>
		</div>

		<div class="col-lg-5 m-auto d-block">
			<br>
		<form action="" method="POST" enctype="multipart/form-data">
			
			 <div class="form-group">
				<label for="category"> Category</label>
  				
			    <select id="category" name="category" class="form-control" value="<?php echo $result['category']; ?>">
			        <option value="beaches">Beaches </option>
			        <option value="waterfalls">Waterfalls</option>
			        <option value="sites">Site Seeing</option>
			        
			    </select>
			  	
			
			</div> 


			
			<div class="form-group">
				<label for="location">Location : </label>
				<input type="text" name="location" id="location" class="form-control" value="<?php echo $result['location']; ?>">
			</div>

			<div class="form-group">
				<label for="place">Place : </label>
				<input type="text" name="place" id="place" class="form-control" value="<?php echo $result['place']; ?>">
			</div>

			

			<div class="form-group">
				<label for="description">Description :</label>
				<input type="text" name="description" id="description" class="form-control" value="<?php echo $result['description']; ?>">
			</div>

			<div class="form-group"> 
				<label for="file">Select Image :</label>
				<input type="file" name="file" id="file" class="form-control" accept=".png, .jpg, .jpeg" value="<?php echo $result['file']; ?>" required>
			</div>

			<!--<div class="form-group">
              <input type="hidden" value="" name="hid" id="hid" />
			</div>-->


            
			<button class="btn btn-success" name="submit" type="submit">Submit</button>
			
		</form>
         <br>
         <a href="view.php?click=1">
			<input type="submit" name="submit" value=" View Records " class="btn btn-success">

		</a>
		</div>
		
</body>
</html>