<?php
  session_start();
  if(!isset($_SESSION['user_email']))
  {
    echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
  }
  else
  {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>VisitNepal - Admin Dashboard</title>
		<!--custom css-->
		<link rel="stylesheet" type="text/css" href="../css/style.css"/>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!--google fonts-->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
		<!--font awesome-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
	</head>
	<body>
		<h1 class="text-center"><i class="fas fa-tachometer"></i> Welcome to Admin Dashboard</h1>
		<hr>
		<div class="container-fluid">


			<div class="row">

					<div class="col-md-4">
							<h2><i class="fas fa-home"></i> Home</h2>
							<ul class="list-group">
								<li class="list-group-item"><a href="index.php?insert_home"><i class="fas fa-file"></i> Create</a></li>
								<li class="list-group-item"><a href="index.php?display_home"><i class="fas fa-eye"></i>View</a></li>

							</ul>
							<hr/>
							
						
							
							<h2><i class="fas fa-tasks"></i>Package</h2>
							<ul class="list-group">
							    <li class="list-group-item"><a href="index.php?insert_package"><i class="fas fa-file"></i> Create</a></li>
								<li class="list-group-item"><a href="index.php?display_package"><i class="fas fa-eye"></i>View</a></li>

							</ul>
							<hr/>

						
							<h2><i class="fas fa-tasks"></i>UserBooking</h2>
							<ul class="list-group">
								<li class="list-group-item"><a href="index.php?display_booking"><i class="fas fa-eye"></i>View</a></li>

							</ul>
							<hr/>
							<h2><i class="fas fa-tasks"></i>UserContact</h2>
							<ul class="list-group">
								<li class="list-group-item"><a href="index.php?display_contact"><i class="fas fa-eye"></i>View</a></li>

							</ul>
							<hr/>

							

							

					</div>

					<div class="col-md-8">

							<?php 
								 if(isset($_GET['insert_home']))
								 {
								 	include('insert-home.php');
								 }
								 if(isset($_GET['display_home']))
								 {
								 	include('display_home.php');
								 }
								 if(isset($_GET['edit_home']))
								 {
								 	include('edit_home.php');
								 }
								 if(isset($_GET['delete_home']))
								 {
								 	include('delete_home.php');
								 }
								 if(isset($_GET['insert_service']))
								 {
								 	include('insert-service.php');
								 }
								 if(isset($_GET['display_service']))
								 {
								 	include('display_service.php');
								 }
								 if(isset($_GET['edit_service']))
								 {
								 	include('edit-service.php');
								 }
								 if(isset($_GET['delete_service']))
								 {
								 	include('delete_service.php');
								 }
								 if(isset($_GET['insert_package']))
								 {
								 	include('insert-package.php');
								 }
								 if(isset($_GET['display_package']))
								 {
								 	include('display_package.php');
								 }
								 if(isset($_GET['edit_package']))
								 {
								 	include('edit_package.php');
								 }
								 if(isset($_GET['delete_package']))
								 {
								 	include('delete_package.php');
								 }
								 if(isset($_GET['insert_packagee']))
								 {
								 	include('insert-packagee.php');
								 }
								 if(isset($_GET['display_packagee']))
								 {
								 	include('display_packagee.php');
								 }
								 if(isset($_GET['edit_packagee']))
								 {
								 	include('edit_packagee.php');
								 }
								 if(isset($_GET['delete_packagee']))
								 {
								 	include('delete_packagee.php');
								 }
								 if(isset($_GET['display_booking']))
								 {
								 	include('display_booking.php');
								 }

								 if(isset($_GET['display_contact']))
								 {
								 	include('display_contact.php');
								 }
								
							?>

					</div>

			</div>


		</div>


   </body>
   </html>
   <?php }?>