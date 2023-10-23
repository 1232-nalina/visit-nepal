<?php

// We need to use sessions, so you should always start sessions using the below code.
session_start();

if(isset($_SESSION['loggedin'])){


}
else{
    header("Location:userlogin.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

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

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="destination.php">destination</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
      <a href="contact.php">contact</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>book now</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">book your trip!</h1>

   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name" value="<?=$_SESSION['name']?>" readonly required>
         </div>
        
      
         <div class="inputBox">
            <span>date :</span>
            <input type="date" name="date" required>
         </div>

         <div class="inputBox">
            
           <span> <select name="package" id="select_package" required></span>
               
		<option value="">choose a package</option>
		<option value="Trekking in chaughare" >Trekking in chaughare</option>
		<option value="camping in nagarkot">camping in nagarkot</option>
		<option value="village tours">village tours</option>
      <option value="paragliding in pokhara">paragliding in pokhara</option>
      <option value="cultural tour in kathmandu valley">cultural tour in kathmandu valley</option>
	</select>   
         </div>
      </div>

      <input type="submit" value="submit" class="btn" name="send">
      
      
      

   </form>

</section>

<!-- booking section ends -->

















<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="destination.php"> <i class="fas fa-angle-right"></i> destination</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
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