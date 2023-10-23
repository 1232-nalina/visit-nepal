<h1>Display Post For Package</h1>
<table class="table table-bordered table-stripped">

<tr class="bg-info">
		<th>S.No</th>
		<th>Title</th>
		<th>Image</th>
		<th>Description</th>
        <th>price</th>
		<th>Edit</th>
		<th>Delete</th>

	</tr>

	<?php 
	 include("../connect.php");
	 $sql="select *from package_tbl";
	 $qry=mysqli_query($con,$sql) or die(mysqli_error());
	 $i=0;
	 while($row=mysqli_fetch_array($qry))
	 {
	 	$id=$row['id'];
	 	$title=$row['title'];
	 	$img=$row['image'];
	 	$desc=$row['description'];
         $price=$row['price'];
	 	 $i++;
    ?>
    	<tr>
    <td><?php echo $id;?></td>
    <td><?php echo $title;?></td>
    <td><?php echo "<img src='../images/$img' width=100 height=100/>";?></td>
    <td><?php echo $desc;?></td>
    <td><?php echo $price;?></td>
    <td><a href="index.php?edit_package=<?php echo $id?>" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</td>
    <td><a href="delete_package.php?delete_package=<?php echo $id?>" class="btn btn-primary"><i class="fas fa-trash"></i> Delete</td>
    <?php
   
    } 
	?>

	</tr>
</table>