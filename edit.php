<?php
include("connect.php");

if(isset($_GET['id']))
 {
	$id = $_GET['id'];
	$sql= "SELECT * FROM tguide where id=".$id;
	$result= $conn->query($sql);
	if($result->num_rows>0)
	{ 
		while($row = mysqli_fetch_assoc($result))
		{
			/*$category= $row['category'];*/
			$location= $row['location'];
			$place = $row['place'];
			$description= $row['description'];
			
		}


	}
	else
        {
            echo 'No record found';
        }	

 }
 else
	{
		echo 'No record found';
	}

	if(isset($_POST['submit']))
    {
        if (isset($_POST['location']) && !empty($_POST['location']))
        {
            $location = $_POST['location'];
        }
        else
        {
           echo "Failed";
        }

        if (isset($_POST['place']) && !empty($_POST['place']))
        {
            $place = $_POST['place'];
        }
        else
        {
            echo "Failed";
        }


        if (isset($_POST['description']) && !empty($_POST['description']))
        {
            $description = $_POST['description'];
        }
        else
        {
            echo "Failed";
        }

        if(isset($location) && !empty($location))
        {
            if(isset($place)  && !empty($place))
            {
                if(isset($description)  && !empty($description))
                {

                    $id = $_POST['hid'];
                    $sql = "UPDATE tguide SET location = '$location', place = '$place', description = '$description' WHERE id=".$id;

                    if($conn->query($sql) == TRUE) 
                    {
                        echo "success";
                    }
                    else
                    {
                        echo "Failed";
                    }
                
                }
            
            }
        }    
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
			
			<!-- <div class="form-group">
				<label for="category"> Category</label>
  				
			    <select id="category" name="category" class="form-control" value="">
			        <option value="beaches">Beaches </option>
			        <option value="waterfalls">Waterfalls</option>
			        <option value="sites">Site Seeing</option>
			        
			    </select>
			  	
			
			</div> -->


			
			<div class="form-group">
				<label for="location">Location : </label>
				<input type="text" name="location" id="location" class="form-control" value="<?php echo $location;?>">
			</div>

			<div class="form-group">
				<label for="place">Place : </label>
				<input type="text" name="place" id="place" class="form-control" value="<?php echo $place;?>">
			</div>

			

			<div class="form-group">
				<label for="description">Description :</label>
				<input type="text" name="description" id="description" class="form-control" value="<?php echo $description;?>">
			</div>

			<!-- <div class="form-group"> 
				<label for="file">Select Image :</label>
				<input type="file" name="file" id="file" class="form-control" accept=".png, .jpg, .jpeg" value=>
			</div>-->

			<div class="form-group">
              <input type="hidden" value="<?php echo $id;?>" name="hid" id="hid" />
			</div>


            
			<button class="btn btn-success" name="submit" type="submit">Submit</button>
			
		</form>
         <br>
         <a href="view.php?click=1">
			<input type="submit" name="submit" value=" View Records " class="btn btn-success">

		</a>
		</div>
		
</body>
</html>