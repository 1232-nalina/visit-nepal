<?php

if (isset($_POST['send']) && $_POST['g-recaptcha-response'] != "") {
    include "connect.php";
    $secret = '6LcnADMgAAAAAI1Au7aWgeJlQjZD_O82ZHcGq4UK';
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
    $responseData = json_decode($verifyResponse);
    if ($responseData->success) {
        
        //first validate then insert in db
       
   if(isset($_POST['send'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $confirmpass = $_POST['confirmpass'];

    if($password == $confirmpass) {
      include('connect.php');
      $encryptedPass = md5($password);
      $request = " insert into signup_form(username, password, email) values('$username','$password','$email') ";
      if ($con->query($request)){
          echo "Signup sucessfully.";
          header('Location: userlogin.php');
      }
  } else {
      echo "Password and confirm password does not match.";
  }
}
    }
    else {

        echo '<script type ="text/JavaScript">';  
echo 'alert(" please verify captcha !!!! ")';  
echo '</script>';  
    }
}