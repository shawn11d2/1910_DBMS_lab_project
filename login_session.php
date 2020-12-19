<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
    session_start();

        $con = mysqli_connect('localhost','root');
        $db = mysqli_select_db($con,'testdb');

  if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql_u = "SELECT * FROM user WHERE username='$username' AND password='$password'";

    $res_u = mysqli_query($con, $sql_u);

    if (mysqli_num_rows($res_u)) {
            echo "<div>
                  <center>
                  <h3> Log IN Success!!!!.</h3><br/>
                  <br>
                  <center>
                  </div>";
                  $_SESSION['username'] = $username;
                  header("refresh:3; url=home.php"); 

    }   
        
    else {
            echo "<div class='form'>
            <center>
                  <h1>Sorry... Your Account Doesn't Exist</h1><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> Again</p>
                  </center>
                  </div>"; 
                
    }

  }

?>
</body>
</html>