
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
<body style="background-image: url('images/bg_login.jpg');">    
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
                                    <form action="search.php" method="POST">
                                    <center>
                                    <div class="col-md-12 ctr" style="padding-top: 250px;">
                                        <input style="height:50px; width : 300px; background-color: white;" type="text" name="place" placeholder="search here" required>
                                        <button type="submit" name="search" class="btn btn-primary">Search</button>
                                    </div>
  
                                </center>
</body>                                
</html>                                
                               