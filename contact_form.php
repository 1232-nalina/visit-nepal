<?php
session_start();
include("connect.php");
   $connection = mysqli_connect('localhost','root','','book_db');

   if (isset($_POST['send']) && $_POST['g-recaptcha-response'] != "") {
      include "connect.php";
      $secret = '6LcnADMgAAAAAI1Au7aWgeJlQjZD_O82ZHcGq4UK';
      $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
      $responseData = json_decode($verifyResponse);
      if ($responseData->success) {

   if(isset($_POST['send'])){
      $email = $_POST['email'];
      $message = $_POST['message'];
    

      $request = " insert into contact_form(email, message) values('$email','$message') ";
      mysqli_query($connection, $request);

      header('location:home.php'); 

   }else{
      echo 'something went wrong please try again!';
   }
}
   }
   else {

      echo '<script type ="text/JavaScript">';  
echo 'alert(" please verify captcha !!!! ")';  
echo '</script>';  
  }

?>