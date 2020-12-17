<?php
include("connect.php");

if(isset($_GET['id'])){
	$id = $_GET['id'];

	$delete_place = "delete from tguide where id='$id'";
	$run_delete = mysqli_query($conn, $delete_place);

	if($run_delete){
		echo "<script>alert('A Place has been deleted!')</script>";
		echo "<script>window.open('view.php','_self')</script>";
	}
}

?>