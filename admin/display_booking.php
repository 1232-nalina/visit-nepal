
<h1>Display Post For booking</h1>
<table class="table table-bordered table-stripped">

	<tr class="bg-info">
		<th>id</th>
		<th>name</th>
		<th>email</th>
		<th>destination</th>
        <th>package</th>
		<th>arrivals</th>
        <th>status</th>
		<th>action</th>

	</tr>

	<?php 
	 include("../connect.php");
	 $sql="select *from book_form";
	 $qry=mysqli_query($con,$sql) or die(mysqli_error());
	 $i=0;
	 while($row=mysqli_fetch_array($qry))
	 {
            $id=$row['id'];
            $name=$row['name'];
            $email=$row['email'];
            $destination=$row['destination'];
            $package=$row['package'];
            $arrivals=$row['date'];
	 	 $i++;
    ?>
    	<tr>
        <td><?php echo $id;?></td>
    <td><?php echo $name;?></td>
    <td><?php echo $email;?></td>
    <td><?php echo $destination;?></td>
    <td><?php echo $package;?></td>
    <td><?php echo $arrivals;?></td>
	 
   
    <td class="text-center">
                            <?php if($row['status'] == 0): ?>
                                <span class="badge badge-warning">Pending</span>
                            <?php elseif($row['status'] == 1): ?>
                                <span class="badge badge-primary">Confirmed</span>
                            <?php elseif($row['status'] == 2): ?>
                                <span class="badge badge-danger">Cancelled</span>
                            
                            <?php endif; ?>
                        </td>
                        <td align="center">
                                <button type="button" class="btn btn-flat btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                    Action
                                <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item view_data" href="booking_view.php?edit_booking=<?php echo $row['id'] ?>" data-id="<?php echo $row['id'] ?>"><span class="fa fa-file text-primary"></span> View</a>
                                <div class="dropdown-divider"></div>
                                <a href="delete_booking.php?delete_booking=<?php echo $id?>" ><i class="dropdown-item delete_data"><span class="fa fa-trash text-danger"></span></i> Delete</a>
                                </div>
                        </td>
                       
                        
                
    <?php

    } 
	?>

	</tr>
</table>

