<style>
    .dropdown {
    position: relative;
    display: inline-block;
  }
  
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }
  
  .dropdown:hover .dropdown-content {
    display: block;
  }
  
  .desc {
    padding: 15px;
    text-align: center;
  }
  .thumbnail:hover {
    position:relative;
    top:-20px;
    left:-25px;
    width:500px;
    height:auto;
    display:block;
    z-index:999;
}
</style>

<?php
        session_start();
        if(!isset($_SESSION["username"])) {
        header("Location: login.php");
        exit();
    }
?> 
<html>
    <head>
        <!--CSS stylesheet and CDN for bootstrap-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="css/style5.css" rel="stylesheet">
        <!--Bootstrap scripts-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </head>
<nav class="navbar  navbar-expand-lg navbar-dark bg-dark" >
                <a class="navbar-brand" href="">TouristGuide</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <div class="nav-link">
                            <?php echo ($_SESSION['username']); ?>
                        </div>
                    </li>    
                    <li class="nav-item" style="border:1px solid;  border-color:white; " >
                        <a class="nav-link" href="user_logout.php">LogOut</a>
                    </li>
                </ul>          
</nav>
<div class="card-body table-full-width table-responsive">
                                    <form action="" method="POST">
                                    <center>
                                    <div class="col-md-6 ctr">
                                        <input type="text" name="place" placeholder="search here" required>
                                        <button type="submit" name="search" class="btn btn-primary">Search</button>
                                    </div>
                                    </center>
</html>                                
                                <?php
                                include('connect.php');  // connection to database code
                                if(isset($_POST['search'])) 
                                {
                                    $place = $_POST["place"];
                                    $category = $_POST["place"];
                                    $sql = "SELECT * FROM tguide WHERE place='$place' OR category='$category' ";
                                    $result = $conn->query($sql);
                                    
                                    
                                            
                                      
                                
                               
                                ?>
                                </form>
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <!-- <th>Category</th> -->

                                            <th>Location</th>
                                            <th>Place</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Feedback</th>
                                        </thead>
                                        <tbody>
                                        <?php
                                        if(mysqli_num_rows($result) > 0)
                                        {
                                            while($row = mysqli_fetch_array($result))
                                            {
                                        ?>
                                            <tr>

                                                <td><a href="https://www.google.com/maps/dir/15.2993265,74.123996/calangute+beach+location+location+url/@15.4236077,73.6671666,10z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3bbfea0148f4ed2b:0xcb592fad5d257d17!2m2!1d73.7534857!2d15.549441" target="blank" ><?php echo $row['location']; ?></a></td>
                                                <td><?php echo $row['place']; ?></td>
                                                <td><?php echo $row['description']; ?></td>
                                                <td><image src= "<?php echo $row['pimage']; ?>" height=200px width = 200px class="thumbnail"></td>
                                                <td><a class="btn btn-primary" href="addfeedback.php?id=<?php echo $row["id"]; ?>">POST FEEDBACK</a></td>
                                                    
                                                    
                                                    
                                                    
                                               
                                                

                                            </tr>
                                            <?php
                                                }
                                            }
                                            else
                                            {
                                                ?>

                                                <!-- <tr>
                                                    <td>colspan="6">No Records Found</td>
                                                </tr> -->
                                                echo "<script>alert('No Records found !')</script>";
		                                        echo "<script>window.open('home.php','_self')</script>";


                                                <?php
                                                
                                            }
                                            ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <?php
                                 }
                                ?>