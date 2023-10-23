<?php
	session_start();
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
	
	<div class="modal-dialog text-center">
		<div class="col-sm-8">
			<div class="modal-content">
			<form class="col-md-12" method="POST" action="" enctype="multipart/form-data">

				<div class="form-group">
					<input type="email" name="username" class="form-control"  placeholder="Enter username" required>
			   </div>
			   <div class="form-group">
				   <input type="password" name="password" class="form-control"  placeholder="Enter password" required>
			</div>
			<button class="btn btn-primary" type="submit" name="btn_login">
				<i class="fas fa-sign-in-alt"></i> Login
			</button>
		</form>
	</div>
</div>
</div>
	
<!--latest and minified version of js and bootstrap js -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
<?php 
  include("../connect.php");
  if(isset($_POST['btn_login']))
  {
    $email = mysqli_real_escape_string($con,$_POST['username']);
    $pass = mysqli_real_escape_string($con,$_POST['password']);
    $sel_user="select *from admin_tbl where user_email='$email' AND user_pass='$pass'";
    $run_user=mysqli_query($con,$sel_user) or die(mysqli_error());
    $check_user=mysqli_num_rows($run_user);
    if($check_user==1||$check_user==2)
    {
      $_SESSION['user_email']=$email;
      echo "<script>window.open('index.php?logged_in=You have successfully logged in!','_self')</script>";
    }
    else
    {
      echo "<script>alert('Password or Email is wrong,try again!')</script>";
    }
  }
 ?>