<?php
include("connect.php");
if($_GET['package_id'])
{
	$get_id=$_GET['package_id'];
	$sql="select *from book_form where id='$get_id'";
	$qry=mysqli_query($con,$sql) or die(mysqli_error());
	$row=mysqli_fetch_array($qry);
	$title=$row['title'];
   $img=$row['image'];
	$desc=$row['description'];
	$price=$row['price'];
}
?>






