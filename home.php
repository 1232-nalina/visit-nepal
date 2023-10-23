<?php include("functions/functions.php");?>
<?php
$BrowTitle = "Home";
require ('connect.php');
error_reporting(0);

session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit;
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

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body class="loggedin">


		
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">VisitNepal</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="packagee.php">package</a>
      <a href="contact.php">contactUs</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->


<h5 class="bg-dark" style="padding: 2px; color: white; margin: 0!important;">
<style>

.navtop div {
   margin-left: 5%;
	display: flex;
	height: 100%;
}
.navtop div a {
   margin-left: 2%;
	padding: 0 20px;
	text-decoration: none;
	color: #c1c4c8;
	font-weight: bold;
}
.navtop div a i {
	padding: 2px 8px 0 0;
}
.navtop div a:hover {
	color: #eaebed;
}
.navtop div p {
  margin-right: 65%;
}

</style>

<nav class="navtop">

<div>
			<p>Welcome back, <?=$_SESSION['name']?>!</p>
		
			
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		
</h5>

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
      <p>Discover exciting hidden places in Nepal, and visit the most outstanding, popular, and hidden monuments that define a culture and people.</p>
      <a href="about.php" class="btn">read more</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home destination section starts  -->

<!-- home destination section ends -->

<!-- home package section starts -->


<!-- home pakage section ends -->

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="packagee.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="contact.php"> <i class="fas fa-angle-right"></i> contactus</a>
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

</body>

</html>