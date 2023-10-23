<?php
include("../connect.php");
if($_GET['edit_home'])
{
	$get_id=$_GET['edit_home'];
	$sql="select *from home_tbl where id='$get_id'";
	$qry=mysqli_query($con,$sql) or die(mysqli_error());
	$row=mysqli_fetch_array($qry);
	$title=$row['title'];
	$desc=$row['description'];
	$img=$row['image'];
}
?>
<h1>Edit Post For Home</h1>
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
	 $home_title=$_POST['post_title'];	 
	 $home_desc=$_POST['post_description'];
	 $home_img=$_FILES['post_image']['name'];
	 $homeimg_tmp=$_FILES['post_image']['tmp_name'];
	move_uploaded_file($homeimg_tmp,"../images/$home_img");
	
	 $home_sql="update home_tbl set title='$home_title',image='$home_img',description='$home_desc' where id='$update_id'";
	 $home_qry=mysqli_query($con,$home_sql) or die(mysqli_error());
	 if($home_qry)
	 {
	 	echo "<script>alert('Post Updated Successfully')</script>";
	 	echo "<script>window.open('index.php?display_home','_self')</script>";
	 }
	 }





?>