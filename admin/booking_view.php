<h1>Update bookings</h1>


<?php
include '../connect.php';
if($_GET['edit_booking'])
{
	$get_id=$_GET['edit_booking'];
	$sql="select *from book_form where id='$get_id'";
	$qry=mysqli_query($con,$sql) or die(mysqli_error());
	$row=mysqli_fetch_array($qry);
	$status=$row['status'];
}
?>
<form action="booking_view.php?id=<?php echo$get_id?>" id="book-status" method="post">
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <div class="form-group">
        <label for="" class="control-label">Status</label>
        <select name="status" id="" class="select custom-select">
            <option value="0" <?php echo $status == 0 ? "selected" : '' ?>>Pending</option>
            <option value="1" <?php echo $status == 1 ? "selected" : '' ?>>Confirmed</option>
            <option value="2" <?php echo $status == 2 ? "selected" : '' ?>>Cancelled</option>
        </select>
    </div>
    <div class="modal-footer">
<input type="submit" name="btn-submit" class="btn btn-primary" id='submit' value="update">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
</div>

</form>


<?php

	 include("../connect.php");
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