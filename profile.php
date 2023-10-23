<?php

// We need to use sessions, so you should always start sessions using the below code.
session_start();

// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: userlogin.php');
	exit;
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'book_db';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT username, password, email FROM signup_form WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($username, $password, $email);
$stmt->fetch();
$stmt->close();

$x= $_SESSION['name'];
$stmt = $con->prepare("SELECT id, date, package, destination FROM book_form WHERE name='$x'");
// In this case we can use the account ID to get the account info.
$stmt->execute();
$stmt->bind_result($id, $date, $package, $destination);
$stmt->fetch();
$stmt->close();
?>

<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>Profile Page</title>
		<link href="css/style1.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>Visit Nepal</h1>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>Profile Page</h2>
			<div>
				<p>Your account details are below:</p>
				<table>
                    
					<tr>
						<td>Username:</td>
						<td><?=$_SESSION['name']?></td>
					</tr>
					<tr>
                    <td>Password:</td>
						<td><?=$password?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><?=$email?></td>
					</tr>
				</table>
				
			</div>
			
		</div>
		<div class="content">
			<h2>Booking details</h2>
			<div>
			
			<div>
			
				<table>

				<hr class="border-warning">
        <table class="table table-stripped text-dark">
		<colgroup>
                <col width="10%">
                <col width="20%">
                <col width="25%">
                <col width="1%">
            </colgroup>
            <thead>
                <tr>
                    <th>id</th>
                    <th>Date</th>
                    <th>Package</th>
                    <th>Status</th>
					
    
    
                </tr>
            </thead>

			<?php 
	 include("connect.php");
	 $sql="select *from book_form WHERE name='$x' ";
	 $qry=mysqli_query($con,$sql) or die(mysqli_error());
	 $i=0;
	 while($row=mysqli_fetch_array($qry))
	 {
            $id=$row['id'];
            $date=$row['date'];
            $package=$row['package'];
            $destination=$row['destination'];
           
           
	 	 $i++;
	 
    ?>
    	<tr>
    <td><?php echo $id;?></td>
    <td><?php echo $date;?></td>
	<td><?php echo $package;?></td>
    

    <td class="text-center">
                            <?php if($row['status'] == 0): ?>
                                <span class="badge badge-warning">Pending</span>
                            <?php elseif($row['status'] == 1): ?>
                                <span class="badge badge-primary">Confirmed</span>
                            <?php elseif($row['status'] == 2): ?>
                                <span class="badge badge-danger">Cancelled</span>
                            <?php endif; ?>
                        </td>
 

						  
						<?php
			}
			?>

			</table>
	
		
			
			
			<tr>
   
   

	 
	
			
					
				
			
	</body>

	
</html>
