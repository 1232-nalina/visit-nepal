<?php
include("../connect.php");
if($_GET['delete_service'])
{
	$del_id=$_GET['delete_service'];
	$sql="delete from service_tbl where id='$del_id'";
	$qry=mysqli_query($con,$sql) or die(mysqli_error());
	{
echo "<script>alert('Post Deleted Successfully')</script>";
echo "<script>window.open('index.php?display_service','_self')</script>";
}
}
?>