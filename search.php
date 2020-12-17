<html>
    <head>
        <!--CSS stylesheet and CDN for bootstrap-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
<nav class="navbar  navbar-expand-lg navbar-dark bg-dark" >
                <a class="navbar-brand" href="">TouristGuide</a>
</nav>
<div class="card-body table-full-width table-responsive">
                                    <form action="" method="POST">
                                    <div class="col-md-6">
                                        <input type="text" name="place" placeholder="search here" required>
                                        <button type="submit" name="search" class="btn btn-primary">Search</button>
                                    </div>
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
                                                
                                                <td><?php echo $row['location']; ?></td>
                                                <td><?php echo $row['place']; ?></td>
                                                <td><?php echo $row['description']; ?></td>
                                                <td><image src= "<?php echo $row['pimage']; ?>" height=100px width = 100px></td>
                                                <td><a class="btn btn-primary" href="addfeedback.php">POST FEEDBACK</a></td>
                                            </tr>
                                            <?php
                                                }
                                            }
                                            else
                                            {
                                                ?>
                                                <tr>
                                                    <td>colspan="6">No Records Found</td>
                                                </tr>
                                                <?php
                                                
                                            }
                                            ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <?php
                                 }
                                ?>