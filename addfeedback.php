<?php
     /*$con=mysqli_connect('localhost','root');
     mysqli_select_db($con,'testdb');*/
     include("connect.php");
     if(isset($_POST['submit']))
	 {
        $username = $_POST['username'];
        $place = $_POST['place'];
        $experience = $_POST['experience'];
        $comments = $_POST['comments'];
        
      
        $add_feedback = "INSERT INTO feedback(username,place,experience,comments) VALUES ('$username','$place','$experience','$comments')";
	    /*$run_feedback = mysqli_query($conn, $add_feedback);*/

	    /*if($run_feedback){
		    echo "<script>alert('Feedback has been Posted!')</script>";
		    echo "<script>window.open('search.php','_self')</script>";
	    }
        */
        if($conn->query($add_feedback) == TRUE) 
        {
            echo "<script>alert('Feedback Posted !')</script>";
            echo "<script>window.open('home.php','_self')</script>";
        }
        else
        {
            echo "<script>alert('Feedback Not Posted Try Again !')</script>";
            echo "<script>window.open('addfeedback.php','_self')</script>";
        }

     }


 ?>   
<?php
        session_start();
        if(!isset($_SESSION["username"])) {
        header("Location: login.php");
        exit();
    }
?> 
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Feedback Form</title>
    <!--  CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="css/form.css" >
    
</head>
<body class="imagebg">
    <nav class="navbar  navbar-expand-lg navbar-dark bg-dark" >
                <a class="navbar-brand" href="">TouristGuide</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">UserPannel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user_logout.php">LogOut</a>
                    </li>
                </ul>          
</nav>
    <div class="container" >
        <!-- <div class="imagebg"></div>  -->
        <div class="row " style="margin-top: 50px">
            <div class="col-md-6 col-md-offset-3 form-container">
                <h2>Feedback</h2> 
                

                <p> Please provide your feedback below: </p>
                <form  method="post"  action="">
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label>Username</label>
                            <p>
                                <input type="text" name="username" value="<?php echo ($_SESSION['username']); ?>">                                                                        
                            </p>
                            <label>Place</label>
                            <?php  
                                $con = mysqli_connect('localhost','root');
                                mysqli_select_db($con,'testdb'); 

                                    $id = $_GET['id'];

                                    $sql = "SELECT place FROM tguide WHERE id = '$id'";
                                    $res = mysqli_query($con,$sql);
                                    if ($res = mysqli_fetch_array($res)) {

                            ?>
                            <p>
                                <input type="text" name="place" value="<?php echo ($res['place']);?>">                                                                        
                            </p>
                            <?php

                                }

                                ?>
                            <label>How do you rate your overall experience?</label>
                             <p>
                                <label class="radio-inline">
                                    <input type="radio" name="experience" id="experience" value="bad" >
                                    Bad 
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="experience" id="experience" value="average" checked >
                                    Average 
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="experience" id="experience" value="good" >
                                    Good 
                                </label>
                            </p> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label for="comments"> Comments:</label>
                            <textarea class="form-control" type="text" name="comments" id="comments" placeholder="Your Comments" maxlength="6000" rows="7" required></textarea>
                        </div>
                    </div>
                   
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            
                            <button class="btn btn-lg btn-warning btn-block" name="submit" type="submit">Submit</button>
			
                        </div>
                    </div>
                </form>

    
                <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Posted your feedback successfully!</h3> </div>
                <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
            </div>
        </div>
    </div>
</body>
</html>