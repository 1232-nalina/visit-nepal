<?php
session_start();
function check_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- bootstrap 4 cdn  -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <!-- ===== Iconscout CSS ===== -->
   <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

   <!-- google captcha  -->
   <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">VisitNepal</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="package.php">package</a>
      <a href="about.php">about</a>
      <a href="userlogin.php">login</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->
<div class="heading" style="background:url(images/header-bg-2.png) no-repeat">
   <h1>sign up</h1>
</div>

<!-- signup section starts -->

<section class="booking">

   <h1 class="heading-title">signup</h1>

   <form action="validate_captcha.php" method="post" class="book-form">

      <div class="flex">
 
        
         <div class="inputBox">
        
      
            <span>username :</span>
            <input type="text" placeholder="enter your username" name="username"  title="Username should not contain space and special characters!" required>
            
         </div><br>

      
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email" required>
         </div>
         
                 <div class="inputBox">
            <span>password :</span>
            <input type="password" id="txtPassword" placeholder="enter your password" name="password" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
         </div><br>
         
         <div class="inputBox">
            <span>confirm password :</span>
            <input type="password" id="txtPassword2" placeholder="confirm your password" name="confirmpass" required>
         </div>
         <div class="g-recaptcha" data-sitekey=""></div>
                                <br>
        
        
      </div>

      <input type="submit" value="submit" class="btn" name="send">
      <h3 align="center"><p class="text-center">
          <p class="text-center">
                    Already have an account?
                    <a href="userlogin.php">Login now</a>
                  </p>
</h3>


   </form>

</section>
<!-- signup section ends -->

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

   

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- verification email -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://smtpjs.com/v3/smtp.js">
</script>



</body>


</html>
