<?php
include("../connect.php");
if($_GET['edit_service'])
{
	$get_id=$_GET['edit_service'];
	$sql="select *from service_tbl where id='$get_id'";
	$qry=mysqli_query($con,$sql) or die(mysqli_error());
	$row=mysqli_fetch_array($qry);
	$title=$row['title'];
	$desc=$row['description'];
	$img=$row['image'];
}
?>
<h1>Edit Post For Service</h1>
<form method="POST" enctype="multipart/form-data">
	<div class="form-group">
		<label for="PostTitle">Post Title</label>
		<input type="text" name="post_title" class="form-control" placeholder="<?php echo $title;?>"/>
	</div>
	<div class="form-group">
		<label for="PostImage">Post Image</label>
		<input type="file"  name="post_image"class="form-control">
	</div>
	<?php echo "<img src='../images/$img' class='img-thumbnail'/>";?>
	<div class="form-group">
		<label for="PostDescription">Post Description</label>
		<textarea name="post_description" rows=10 cols-60 class="form-control">
		<?php echo $desc;?>
		</textarea>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary" name="btn-submit"> Edit</button>
	</div>
</form>
<?php
	include("../connect.php");
	if(isset($_POST['btn-submit']))
	{
	$update_id=$get_id;
	$service_title=$_POST['post_title'];
	$service_desc=$_POST['post_description'];
	$service_img=$_FILES['post_image']['name'];
	$serviceimg_tmp=$_FILES['post_image']['tmp_name'];
	move_uploaded_file($serviceimg_tmp,"../images/$service_img");
	$service_sql="update service_tbl set title='$service_title',image='$service_img',description='$service_desc' where id='$update_id'";
	$service_qry=mysqli_query($con,$service_sql) or die(mysqli_error());
	if($service_qry)
	{
echo "<script>alert('Post Updated Successfully')</script>";
echo "<script>window.open('index.php?display_service','_self')</script>";
}
}
?>