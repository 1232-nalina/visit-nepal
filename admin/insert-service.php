<h1>Insert Post For Service</h1>
<form method="POST" enctype="multipart/form-data">
	<div class="form-group">
		<label for="PostTitle">Post Title</label>
		<input type="text" name="post_title" class="form-control" placeholder="post title" required/>
	</div>
	<div class="form-group">
		<label for="PostImage">Post Image</label>
		<input type="file"  name="post_image"class="form-control" placeholder="post image" required/>
	</div>
	<div class="form-group">
		<label for="PostDescription">Post Description</label>
		<textarea name="post_description" rows=10 cols-60 class="form-control">
		</textarea>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary" name="btn-submit"> Create</button>
	</div>
</form>
<?php
	include("../connect.php");
	if(isset($_POST['btn-submit']))
	{
		$title=$_POST['post_title'];
		$img=$_FILES['post_image']['name'];
		$img_tmp=$_FILES['post_image']['tmp_name'];
		move_uploaded_file($img_tmp,"../images/$img");
		$desc=$_POST['post_description'];
		$sql="insert into service_tbl(title,image,description)values('$title','$img','$desc')";
		$qry=mysqli_query($con,$sql) or die(mysqli_error());
		if($qry)
		{
			echo "<script>alert('Post Created Successfully')</script>";
		}
	}
?>