
<?php
include 'connect.php';
if($_GET['edit_booking'])
{
	$get_id=$_GET['edit_booking'];
	$sql="select *from book_form where id='$get_id'";
	$qry=mysqli_query($con,$sql) or die(mysqli_error());
	$row=mysqli_fetch_array($qry);
	$status=$row['status'];
}
?>





<?php

	 include("connect.php");
	 if(isset($_POST['btn-submit']))
	 {

     $update_id=$_GET['id'];
	 $status=$_POST['status'];	 
	
	 $package_sql="update book_form set status='$status' WHERE id= '$update_id'";
	 $package_qry=mysqli_query($con,$package_sql) or die(mysqli_error());
	 if($package_qry)
	 {
	 	echo "<script>alert('Post Updated Successfully')</script>";
	 	echo "<script>window.open('index.php?display_booking','_self')</script>";
	 }
	 }
     ?>


