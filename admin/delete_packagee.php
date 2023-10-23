<?php
include("../connect.php");
if($_GET['delete_packagee'])
{
	$get_id=$_GET['delete_packagee'];
	$sql="delete from packagee_tbl where id='$get_id'";
	$qry=mysqli_query($con,$sql) or die(mysqli_error());
	 {
	 	echo "<script>alert('Post Deleted Successfully')</script>";
	 	echo "<script>window.open('index.php?display_packagee','_self')</script>";
	 }
}
?>