<?php
require ('connect.php');
error_reporting(0);

session_start();
?>

<?php include("functions/functions.php");?>
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

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">


</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">VisitNepal</a>
  <!-- <link rel="icon" href="logo.jpg" type="image/x-icon" /> -->

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="book.php">package</a>
      <a href="userlogin.php">login</a>
      <a href="contact.php">contact</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->


<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/rise.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>Hamro Gau Hamro Thau</h3>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/dark.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>discover the new places</h3>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/rhododendron.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>make your tour worthwhile</h3>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->


<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/about.jpg" alt="">
   </div>

   <div class="content">
      <h3>about us</h3>
      <p></p> Discover exciting hidden places in Nepal, and visit the most outstanding, popular, and hidden monuments that define a culture and people.
      <a href="about.php" class="btn">read more</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home destination section starts  -->

<section class="home-packages">

   
   
  
</section>

<!-- home destination section ends -->

<!-- home package section starts -->

<section class="home-packages">

   <h1 class="heading-title"> our packages </h1>

  <div class="box-container">

      <h1 align="center">Please login to view packages!!</h1>

   </div>

   

  
</section>

<!-- home pakage section ends -->

<!-- login section starts -->

<section class="booking">
<div class="login">
	
		

  <h1 class="heading-title">Login</h1>

   <form action="authenticate.php" method="post" class="book-form">

      <div class="flex">
        
         <div class="inputBox">
            <span>username :</span>
            <i class="fas fa-user"></i>
            <input type="text" placeholder="enter your username" name="username" id="username"  required>
         </div><br><br><br>
         <div class="inputBox">
            <span>password :</span>
            
					<i class="fas fa-lock"></i>
            <input type="password" placeholder="enter your password" name="password" id="password"  required>
         </div>
        
        
        
      </div>

      <input type="submit" value="submit" class="btn" name="send">
      <h2 align="center"><p class="text-center">
                    Don't have an account?
                    <a href="signup.php">Register</a>
                  </p>
                  </h2>

   </form>

</section>
<!-- login section ends -->





<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="userlogin.php"> <i class="fas fa-angle-right"></i> login</a>
         <a href="contact.php"> <i class="fas fa-angle-right"></i> contactus</a>
      </div>

   

      <div class="box">
         <h3>follow us</h3>
         <a href="https://www.facebook.com/?stype=lo&jlou=AfcA9nxUbp4oFoL1YmKhrOjvTI7X6Um7Ixuz5IaSY5ScJu0Xhlrrj887zW64XaCXUJHMmSYMYKg7J32sqlT4FVBXkJ3DCXKtGJo5nbUVqoyQWw&smuh=28972&lh=Ac8AeAVjmkK4pKTspLk"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="https://twitter.com/i/flow/login"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="https://www.instagram.com/"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="https://www.linkedin.com/login/"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>



</body>
</html>