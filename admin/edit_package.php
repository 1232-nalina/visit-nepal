<?php
include("../connect.php");
if($_GET['edit_package'])
{
	$get_id=$_GET['edit_package'];
	$sql="select *from package_tbl where id='$get_id'";
	$qry=mysqli_query($con,$sql) or die(mysqli_error());
	$row=mysqli_fetch_array($qry);
	$title=$row['title'];
	$desc=$row['description'];
	$img=$row['image'];
    $price=['price'];
}
?>
<h1>Edit Post For Package</h1>
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
		<label for="PostPrice">Post Price</label>
		<input type="int" name="post_price" class="form-control" placeholder="<?php echo $price;?>"/>
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
	 $package_title=$_POST['post_title'];	 
	 $package_desc=$_POST['post_description'];
     $package_price=$_POST['post_price'];	 
	 $package_img=$_FILES['post_image']['name'];
	 $packageimg_tmp=$_FILES['post_image']['tmp_name'];
	move_uploaded_file($packageimg_tmp,"../images/$package_img");
	
	 $package_sql="update package_tbl set title='$package_title',image='$package_img',description='$package_desc' where id='$update_id'";
	 $package_qry=mysqli_query($con,$package_sql) or die(mysqli_error());
	 if($package_qry)
	 {
	 	echo "<script>alert('Post Updated Successfully')</script>";
	 	echo "<script>window.open('index.php?display_package','_self')</script>";
	 }
	 }





?>