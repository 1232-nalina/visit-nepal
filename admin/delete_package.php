<?php
include("../connect.php");
if($_GET['delete_package'])
{
	$get_id=$_GET['delete_package'];
	$sql="delete from package_tbl where id='$get_id'";
	$qry=mysqli_query($con,$sql) or die(mysqli_error());
	 {
	 	echo "<script>alert('Post Deleted Successfully')</script>";
	 	echo "<script>window.open('index.php?display_package','_self')</script>";
	 }
}
?>