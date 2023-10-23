<?php
session_start();


// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: userlogin.php');
	exit;
}


include("connect.php");
   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send'])){
      $id = $_POST['id'];  
      $name = $_POST['name'];
      $email = $_POST['email'];
      $destination = $_POST['destination'];
      $package = $_POST['package'];
      $date = $_POST['date'];
      
      
    

      $request = " insert into book_form(id, name, email, destination, package, date) values('$id','$name','$email','$destination','$package','$date') ";
      echo "<script>alert('Booked succesfully');</script>";
      mysqli_query($connection, $request);
      
     

      header('location:package.php'); 

   }else{
      echo "<script>alert('Please enter the valid username');</script>";
   }

?>