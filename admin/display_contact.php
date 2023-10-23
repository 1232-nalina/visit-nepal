<div class="card card-outline card-primary">
	<div class="card-header">
		<h3 class="card-title">List of Inquiries</h3>
		<!-- <div class="card-tools">
			<a href="?page=packages/manage" class="btn btn-flat btn-primary"><span class="fas fa-plus"></span>  Create New</a>
		</div> -->
	</div>
	<div class="card-body">
        <div class="container-fluid">
        <table class="table table-stripped text-dark">
            <colgroup>
                <col width="10%">
                <col width="20%">
                <col width="45%">
                
            </colgroup>
            <thead>
                <tr>
                    <th>id</th>
                    <th>email</th>
                    <th>message</th>
                    
                </tr>
            </thead>
            <?php 
	 include("../connect.php");
	 $sql="select *from contact_form";
	 $qry=mysqli_query($con,$sql) or die(mysqli_error());
	 $i=0;
	 while($row=mysqli_fetch_array($qry))
	 {
            $id=$row['id'];
            $email=$row['email'];
            $message=$row['message'];
	 	 $i++;
    ?>
    	<tr>
    
    <td><?php echo $id;?></td>
    <td><?php echo $email;?></td>
    <td><?php echo $message;?></td>
    <td>
    
                            
    </td>

   
    <?php
   
    } 
	?>