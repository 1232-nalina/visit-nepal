<?php
include("../connect.php");
if($_GET['delete_booking'])
{
	$del_id=$_GET['delete_booking'];
	$sql="delete from book_form where id='$del_id'";
	$qry=mysqli_query($con,$sql) or die(mysqli_error());
	{
echo "<script>alert('Post Deleted Successfully')</script>";
echo "<script>window.open('index.php?display_booking','_self')</script>";
}
}
?>